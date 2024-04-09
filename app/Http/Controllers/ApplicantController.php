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
    public function show(Applicant $applicant)
    {
        //dd($applicant);
        //$applicant = Applicant::find($applicant);

        return Inertia::render('Dashboard/Applicant/Show', [
            'applicant' => $applicant,
        ]);

    }

}