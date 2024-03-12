<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AnnouncementCategory;
use App\Models\AnnouncementType;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Announcement;
use App\Http\Transformers\AnnouncementTransformer;

class AnnouncementController extends Controller
{

    public function index(Request $request)
    {
        $filters = $request->only(['category_id', 'type_id']);
        $announcements = Announcement::filter($filters)->paginate(30);
        $announcementsData = fractal($announcements, new AnnouncementTransformer())->includeDocuments()->toArray();
        $allTypes = AnnouncementType::all()->toArray();
        $allCategories = AnnouncementCategory::all()->toArray();
        return Inertia::render('Dashboard/Announcement/Index')->with([
            'allTypes' => $allTypes,
            'allCategories' => $allCategories,
            'announcements' => $announcementsData,
        ]);
    }

    public function show(Announcement $announcement)
    {
        $allTypes = AnnouncementType::all()->toArray();
        $allCategories = AnnouncementCategory::all()->toArray();
        $announcementData = fractal($announcement, new AnnouncementTransformer())->includeDocuments()->toArray();
        return Inertia::render('Dashboard/Announcement/Show')->with([
            'allTypes' => $allTypes,
            'allCategories' => $allCategories,
            'announcement' => $announcementData,
        ]);
    }

}
