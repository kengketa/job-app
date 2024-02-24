<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    public function index(Request $request)
    {
        // $announcements = Announcement::all();
        $request->validate([
            'type_id' => ['nullable', 'exists:announcement_types,id'],
            'category_id' => ['nullable', 'exists:announcement_categories,id']
        ]);

        $filters = $request->only(['category_id', 'type_id']);
        $announcements = Announcement::filter($filters)->paginate(10);
        return response()->json($announcements);

        //dd($announcements);
    }



}
