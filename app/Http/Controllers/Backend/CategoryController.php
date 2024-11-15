<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;

class CategoryController extends Controller
{
    //Index
    public function index(){
        $categories = Category::latest()->get();
        return view('admin.backend.category.index',compact('categories'));
    }
    //create
    public function create(){
        return view('admin.backend.category.add');
    }
    //store
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'category_name' => 'required|unique:categories',
        ]);
        //request has file
        if($request->hasFile('category_image')){
            $file = $request->file('category_image');
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('uploads/category_images'),$filename);
            $category_image = 'uploads/category_images/'.$filename;
            Category::insert([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-',$request->category_name)),
                'category_image' => $category_image,
                'category_description' => '',
                'category_status' => 'active',
            ]);
        }
        $notification = array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
    //edit
    public function edit($id){
        dd($id);
        $category = Category::findOrFail($id);
        return view('admin.backend.category.edit',compact('category'));
    }
    //update
    public function update(Request $request,$id){
        dd($request->all());
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_slug' => 'required|unique:categories'
        ]);
        Category::findOrFail($id)->update([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-',$request->category_name))
        ]);
        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }
    //destroy
    public function destroy($id){
        dd($id);
        Category::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }
}
