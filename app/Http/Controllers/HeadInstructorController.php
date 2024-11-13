<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeadInstructorController extends Controller
{
    //Head_instructorDashboard
    public function Head_instructorDashboard(){
        return view('head_instructor.head_instructor_dashboard');
    }
}
