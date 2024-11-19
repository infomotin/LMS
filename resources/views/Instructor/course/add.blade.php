@extends('instructor.instructor_dashboard')
@section('instructor')
    {{-- add jquery cdn link --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="main-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Forms</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body p-4">

                        <form action="{{ route('course.store') }}" method="POST" id="myForm"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3 row align-items-center justify-content-center">

                                <div class="col-lg-6">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option value="">Select Category</option>
                                        @foreach ($categorys as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="subcategory_id" class="form-label">Subcategory</label>
                                    <select class="form-control" name="subcategory_id" id="subcategory_id">
                                        <option></option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="course_image" class="form-label">Course Image</label>
                                    <input type="file" class="form-control" id="image" name="course_image">
                                </div>
                                <div class="col-lg-6">
                                    
                                    <img src="" alt="" id="showImage" class="mt-3" style="width: 100px; height: 100px;">
                                </div>

                                <div class="col-lg-6">
                                    <label for="course_image" class="form-label">Course Intro Video</label>
                                    <input type="file" class="form-control" id="intovideo" name="course_intovideo" accept="video/mp4, video/webm">
                                </div>

                                <div class="form-group col-md-6">

                                </div>

                                <div class="col-lg-6">
                                    <label for="course_title" class="form-label">Course Title</label>
                                    <input type="text" class="form-control" id="course_title" name="course_title"
                                        placeholder="Enter Course Title">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_name" class="form-label">Course Name</label>
                                    <input type="text" class="form-control" id="course_name" name="course_name"
                                        placeholder="Enter Course Name">
                                </div>

                                <div class="col-lg-6">
                                    <label for="course_description" class="form-label">Course Description</label>
                                    <textarea class="form-control" id="myeditorinstance" name="course_description" rows="3"
                                        placeholder="Enter Course Description"></textarea>
                                </div>

                                <p>Course Goals</p>


                                <!--   //////////// Goal Option /////////////// -->

                                <div class="row add_item">

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="goals" class="form-label"> Goals </label>
                                            <input type="text" name="goal_name[]" id="goals" class="form-control"
                                                placeholder="Goals ">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6" style="padding-top: 30px;">
                                        <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add
                                            More..</a>
                                    </div>
                                </div>

                                <!--   //////////// Goal Option /////////////// -->

                                <div class="col-lg-6">
                                    <label for="course_duration" class="form-label">Course Duration</label>
                                    <input type="text" class="form-control" id="course_duration" name="course_duration"
                                        placeholder="Enter Course Duration">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_level" class="form-label">Course Level</label>
                                    <select class="form-control" name="course_level" id="course_level">
                                        <option value="">Select Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_language" class="form-label">Course Language</label>
                                    <select class="form-control" name="course_language" id="course_language">
                                        <option value="">Select Language</option>
                                        <option value="Bangla">Bangla</option>
                                        <option value="English">English</option>
                                        <option value="Hindi">Hindi</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_resources" class="form-label">Course Resources</label>
                                    <input type="text" class="form-control" id="course_resources"
                                        name="course_resources" placeholder="Enter Course Resources">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_certificate" class="form-label">Course Certificate</label>
                                    <select name="course_certificate" class="form-control" id="course_certificate">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                
                                <div class="col-lg-6">
                                    <label for="course_price" class="form-label">Course Price</label>
                                    <input type="number" class="form-control" id="course_price" name="course_price"
                                        placeholder="Enter Course Price">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_discount" class="form-label">Course Discount</label>
                                    <input type="number" class="form-control" id="course_discount"
                                        name="course_discount" placeholder="Enter Course Discount">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_prerequisites" class="form-label">Course Prerequisites</label>
                                    <input type="text" class="form-control" id="course_prerequisites"
                                        name="course_prerequisites" placeholder="Enter Course Prerequisites">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_bestseller" class="form-label">Course Bestseller</label>
                                    <select name="course_bestseller" class="form-control" id="course_bestseller">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4">
                                    <label for="course_features" class="form-label">Course Features</label>
                                    <input type="text" class="form-control" id="course_features"
                                        name="course_features" placeholder="Enter Course Features">
                                </div>
                                <div class="col-lg-4">
                                    <label for="course_heighestrated" class="form-label">Course Heighestrated</label>
                                    <input type="text" class="form-control" id="course_heighestrated"
                                        name="course_heighestrated" placeholder="Enter Course Heighestrated">
                                </div>
                                <div class="col-lg-4">
                                    <label for="course_status" class="form-label">Course Status</label>
                                    <select name="course_status" class="form-control" id="">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>

                                <div class="col-12">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary px-4">Submit</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                <div class="container mt-2">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="goals">Goals</label>
                            <input type="text" name="goal_name[]" id="goals" class="form-control"
                                placeholder="Goals  ">
                        </div>
                        <div class="form-group col-md-6" style="padding-top: 20px">
                            <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
                            <span class="btn btn-danger btn-sm removeeventmore"><i
                                    class="fa fa-minus-circle">Remove</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    category_name: {
                        required: true,
                    },
                    category_image: {
                        required: true,
                    }


                },
                messages: {
                    category_name: {
                        required: 'Please Enter Category Name',
                    },
                    category_image: {
                        required: 'Please Enter Category Image',
                    }


                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>

<script>
    $(document).ready(function() {
        $('#intovideo').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showIntovideo').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>
    <script type="text/javascript">
        $(document).ready(function() {
            var counter = 0;
            $(document).on("click", ".addeventmore", function() {
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function(event) {
                $(this).closest("#whole_extra_item_delete").remove();
                counter -= 1
            });
        });
    </script>
    <!--========== End of add multiple class with ajax ==============-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                
                var category_id = $(this).val();
                console.log(category_id);
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",

                        success: function(data) {
                            console.log(data);
                            $('select[name="subcategory_id"]').html('');
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .sub_category_name + '</option>');
                            });
                        },

                    });
                } else {
                    alert('danger');
                }
            });
        });
    </script>
@endsection
