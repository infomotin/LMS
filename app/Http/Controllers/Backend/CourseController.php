<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Backend\Course;
use App\Models\Backend\Course_goal;
use App\Models\Backend\Category;
use App\Models\Backend\SubCategory;
use Intervention\Image\Facades\Image;

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
    // store
    public function store(Request $request){
        //image
        $image = $request->file('course_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,246)->save('upload/course/'.$name_gen);
        // $image->move(public_path('upload/course/'), $name_gen);
        $save_url = 'upload/course/'.$name_gen;
        //end image
        $video   = $request->file('course_intovideo');
        $video_name_gen = time().'.'.$video->getClientOriginalExtension();
        $video->move(public_path('upload/course/'), $video_name_gen);
        $video_url = 'upload/course/'.$video_name_gen;

        $course = new Course();
        $course->category_id = $request->category_id;
        $course->subcategory_id = $request->subcategory_id;
        $course->instructor_id = Auth::user()->id;
        $course->course_title = $request->course_title;
        $course->course_name = $request->course_name;
        $course->course_image = $save_url;
        $course->course_intovideo = $video_url;
        $course->course_name_slug = str_replace(' ', '-', $request->course_name);
        $course->course_description = $request->course_description;
        $course->course_duration = $request->course_duration;
        
        $course->course_level = $request->course_level;
        $course->course_language = $request->course_language;
        $course->course_resources = $request->course_resources;
        $course->course_certificate = $request->course_certificate;
        $course->course_price = $request->course_price;
        $course->course_discount = $request->course_discount;
        $course->course_prerequisites = $request->course_prerequisites;
        $course->course_bestseller = $request->course_bestseller;
        $course->course_features = $request->course_features;
        $course->course_heighestrated = $request->course_heighestrated;
        $course->course_status = $request->course_status;
        $course->save();
        // dd($course->id);
        $course_gole = new Course_goal();
        $course_gole->course_id = $course->id;
        if($request->goal_name){
           if(count($request->goal_name) > 0){
                foreach($request->goal_name as $key => $goal_name){
                    $course_gole = new Course_goal();
                    $course_gole->course_id = $course->id;
                    $course_gole->goal_name = $goal_name;
                    $course_gole->save();
                }
           }
        }
        

        $notification = array(
            'message' => 'Course Added Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->route('course.index');
        // ->with($notification);
    }
    //edit
    public function edit($id){
        $course = Course::find($id);
        $goals = Course_goal::where('course_id',$id)->get();
        $categories = Category::latest()->get();
        $subcategories = SubCategory::latest()->get();
        return view('instructor.course.edit', compact('course', 'goals','categories','subcategories'));
    }
    //update
    public function update(Request $request){
        // dd(request()->all());
        $cid = $request->course_id;
        // dd($cid);
        Course::find($cid)->update([
            
            "course_name" => $request->course_name,
            "course_title" => $request->course_title,
            "category_id" => $request->category_id,
            "subcategory_id" => $request->subcategory_id,
            "course_certificate" => $request->course_certificate,
            "course_level" => $request->course_level,
            "course_price" => $request->course_price,
            "course_discount" => $request->course_discount,
            "course_duration" => $request->course_duration,
            "course_resources" => $request->course_resources,
            "course_prerequisites" => $request->course_prerequisites,
            "course_description" => $request->course_description,
            "course_features" => $request->course_features,
            "course_heighestrated" => $request->course_heighestrated,
        ]);
        $notification = array(
            'message' => 'Course Updated Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->route('course.index')->with($notification);

    }
    //updateVideo
    public function updateVideo(Request $request){
        // dd($request->all());
        $id = $request->course_id;
        $old_video = $request->old_vid;
        if($request->file('course_intovideo')){
            // dd($old_video);
            // unlink($old_video);
            $video = $request->file('course_intovideo');
            dd($video);
            $video_name_gen = time().'.'.$video->getClientOriginalExtension();
            $video->move(public_path('upload/course/'), $video_name_gen);
            $video_url = 'upload/course/'.$video_name_gen;
            Course::findOrFail($id)->update(['course_intovideo' => $video_url]);
            $notification = array(
                'message' => 'Course Video Updated Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('course.index')->with($notification);
        }
    }



    // updateImage
    public function updateImage(Request $request){
        // dd($request->all());
        $id = $request->course_id;
        $old_image = $request->old_img;
        // dd($old_image);
        if($request->file('course_image')){
            unlink($old_image);
            $image = $request->file('course_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,246)->save('upload/course/'.$name_gen);
            $save_url = 'upload/course/'.$name_gen;
            Course::findOrFail($id)->update(['course_image' => $save_url]);
            $notification = array(
                'message' => 'Course Image Updated Successfully',
                'alert-type' => 'success'
            );
            
            return redirect()->route('course.index')->with($notification);
        }
    }
    //updateGoal
    public function updateGoal(Request $request){
        $Course_id = $request->id;
        if($request->course_goals == null){
            return redirect()->back();
        }
        Course_goal::where('course_id', $Course_id)->delete();
        if(count($request->course_goals) > 0){
            foreach($request->course_goals as $key => $goal){
                $course_gole = new Course_goal();
                $course_gole->course_id = $Course_id;
                $course_gole->goal_name = $goal;
                $course_gole->save();
            }
        }
        $notification = array(
            'message' => 'Course Goal Updated Successfully',
            'alert-type' => 'success'
        );
        
        return redirect()->back()->with($notification);
    }
    // /GetSubCategory
    public function GetSubCategory($category_id){
        $subcategories = SubCategory::where('category_id', $category_id)->orderBy('sub_category_name', 'asc')->get();
        // dd($subcategories);
        return json_encode($subcategories);
    }
}
