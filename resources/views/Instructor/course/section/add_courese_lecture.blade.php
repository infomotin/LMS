@extends('instructor.instructor_dashboard')
@section('instructor')
    {{-- add jquery cdn link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <div class="page-content">
        <div class="row">
            <div class="col-12">
                <h6 class="mb-0 text-uppercase">Course Section Information</h6>
                <hr>
                <div class="card radius-10">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{ asset($course->course_image) }}" class="rounded-circle p-1 border" width="90"
                                height="90" alt="...">
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mt-0">{{ $course->course_name }}</h5>
                                <p class="mb-0">{{ $course->course_title }}</p>
                            </div>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Add Section</button>
                        </div>
                    </div>
                </div>

            </div>
            <hr>
            {{-- add Setion and lecture  --}}
            @foreach ($courseSections as $key => $courseSection)
                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body p-4 d-flex justify-content-between">
                                        {{-- @dd($courseSection) --}}
                                        <h6>{{ $courseSection->section_title }}</h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button type="submit" class="btn btn-danger px-2 ms-auto me-2">Scetion Delete
                                                </i></button>&nbsp;
                                            <a class="btn btn-primary px-2 ms-auto"
                                                onclick ="addLectureDiv({{ $course->id }},{{ $courseSection->id }},'lactureContentainer{{ $key }}')"
                                                id="lactureContentainerBtn{{ $key }}"> Add Lecture</a>
                                        </div>
                                    </div>
                                    <div class="courseHide" id="lactureContentainer{{ $key }}">
                                        <div class="container">
                                            <div
                                                class="lactureContentainerBtn mb-3 d-flex align-items-center justify-content-between">
                                                <div>
                                                    <strong>Lecture</strong>
                                                </div>
                                                <div class="btn btn-group">
                                                    <a href="" class="btn btm-sm btn-primary"> Edit</a> &nbsp;
                                                    <a href="" class="btn btm-sm btn-danger"> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- modal start  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Section Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('add.course.section') }}" method="POST">
                        @csrf
                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                        <div class="form-group md-3">
                            <label for="section_title" class="form-label">Section Title</label>
                            <input type="text" class="form-control" id="section_title" name="section_title"
                                placeholder="Section Title">
                        </div>
                        <div class="form-group md-3">
                            <label for="section_description" class="form-label">Section Description</label>
                            <input type="text" class="form-control" id="section_description" name="section_description"
                                placeholder="section_description">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- modal end  --}}


    <script>
        function addLectureDiv(course_id, section_id, div_id) {
            const lectureContentainer = document.getElementById(div_id);
            const newLectureDiv = document.createElement('div');
            
            newLectureDiv.classList.add('lactureContentainerBtn');
            newLectureDiv.classList.add('mb-3');

            newLectureDiv.innerHTML = `<div class="container">
                                        <h6>Leacture Tile </h6>
                                        <input type="text" class="form-control" placeholder="Lecture Title">
                                        <h6>Lecture Video url</h6>
                                        <input type="text" class="form-control" placeholder="Lecture Video Url" name="url">
                                        <h6>Lecture Description</h6>
                                        <textarea name="lecture_content" id="" class="form-control"></textarea>
                                        <h6>lecture_file</h6>
                                        <input type="file" name="lecture_file" class="form-control">
                                        <h6>Lecture Video </h6>
                                        <input type="file" name="lecture_video" class="form-control">
                                        <button type="submit" onclick="" class="btn btn-primary">Save</button>
                                        <button type="submit" onclick="" class="btn btn-primary">Cancel</button>
                                        </div>`;
            lectureContentainer.appendChild(newLectureDiv);
        }
    </script>
@endsection
