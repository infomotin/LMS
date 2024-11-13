<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LecturerController extends Controller
{
    //LecturerDashboard
    public function lecturerDashboard()
    {
        return view('lecturer.lecturer-dashboard');
    }
}
