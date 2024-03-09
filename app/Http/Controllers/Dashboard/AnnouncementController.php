<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Announcement;
use App\Http\Transformers\AnnouncementTransformer;

class AnnouncementController extends Controller
{

    public function index()
    {
        $announcements = Announcement::paginate(30);
        $announcementsData = fractal($announcements, new AnnouncementTransformer())->includeDocuments()->toArray();

        return Inertia::render('Dashboard/Announcement/Index')->with([
            'announcements' => $announcementsData
        ]);
    }

}
