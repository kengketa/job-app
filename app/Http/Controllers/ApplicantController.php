<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function show(Applicant $applicant)
    {
        dd($applicant);
        //return Inertia::render xxxx
        
    }
}
