<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Course;

class CourseController extends Controller
{
    //index
    public function index(){
        $id = Auth::user()->id;
        $courses = Course::where('instructor_id', $id)->get();

        return view('instructor.course.index', compact('courses'));
    }
    //create
    public function create(){
        return view('instructor.course.add');
    }

}
