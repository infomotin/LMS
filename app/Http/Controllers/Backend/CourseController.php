<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Course;
use App\Models\Backend\Category;
use App\Models\Backend\SubCategory;

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
        $categorys = Category::latest()->get();
        return view('instructor.course.add', compact('categorys'));
    }
    // /GetSubCategory
    public function GetSubCategory($category_id){
        $subcategories = SubCategory::where('category_id', $category_id)->orderBy('sub_category_name', 'asc')->get();
        // dd($subcategories);
        return json_encode($subcategories);
    }
}
