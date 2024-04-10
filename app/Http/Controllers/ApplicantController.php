<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\AnnouncementCategory;
use App\Models\AnnouncementType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;
use App\Models\Announcement;
use App\Http\Transformers\AnnouncementTransformer;


class ApplicantController extends Controller
{
    // public function index(Request $request)
    // {
    //     $filters = $request->only(['category_id', 'type_id']);
    //     $applicants = Applicant::filter($filters)->orderBy('start_date', 'desc')->paginate(30);
    //     $applicantsData = fractal($applicants, new AnnouncementTransformer())->includeDocuments()->toArray();
    //     $allTypes = AnnouncementType::all()->toArray();
    //     $allCategories = AnnouncementCategory::all()->toArray();
    //     return Inertia::render('Dashboard/Applicants/Index')->with([
    //         'allTypes' => $allTypes,
    //         'allCategories' => $allCategories,
    //         'applicants' => $applicantsData,
    //     ]);
    // }

    public function show(Applicant $applicant)
    {
        //dd($applicant);
        //$applicant = Applicant::find($applicant);

        return Inertia::render('Dashboard/Applicant/Show', [
            'applicant' => $applicant,
        ]);

    }

}