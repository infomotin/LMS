@extends('instructor.instructor_dashboard')
@section('instructor')
{{-- add jquery cdn link --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    {{-- <div class="container">
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
                                    <li class="breadcrumb-item active" aria-current="page">Wizard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!--end breadcrumb-->

                    <!--start stepper one-->

                    <h6 class="text-uppercase">Non Linear</h6>
                    <hr>
                    <div id="stepper1" class="bs-stepper">
                        <div class="card">

                            <div class="card-header">
                                <div class="d-lg-flex flex-lg-row align-items-lg-center justify-content-lg-between"
                                    role="tablist">
                                    <div class="step" data-target="#test-l-1">
                                        <div class="step-trigger" role="tab" id="stepper1trigger1"
                                            aria-controls="test-l-1">
                                            <div class="bs-stepper-circle">1</div>
                                            <div class="">
                                                <h5 class="mb-0 steper-title">Personal Info</h5>
                                                <p class="mb-0 steper-sub-title">Enter Your Details</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-2">
                                        <div class="step-trigger" role="tab" id="stepper1trigger2"
                                            aria-controls="test-l-2">
                                            <div class="bs-stepper-circle">2</div>
                                            <div class="">
                                                <h5 class="mb-0 steper-title">Account Details</h5>
                                                <p class="mb-0 steper-sub-title">Setup Account Details</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-3">
                                        <div class="step-trigger" role="tab" id="stepper1trigger3"
                                            aria-controls="test-l-3">
                                            <div class="bs-stepper-circle">3</div>
                                            <div class="">
                                                <h5 class="mb-0 steper-title">Education</h5>
                                                <p class="mb-0 steper-sub-title">Education Details</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bs-stepper-line"></div>
                                    <div class="step" data-target="#test-l-4">
                                        <div class="step-trigger" role="tab" id="stepper1trigger4"
                                            aria-controls="test-l-4">
                                            <div class="bs-stepper-circle">4</div>
                                            <div class="">
                                                <h5 class="mb-0 steper-title">Work Experience</h5>
                                                <p class="mb-0 steper-sub-title">Experience Details</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="bs-stepper-content">
                                    <form onSubmit="return false">
                                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger1">
                                            <h5 class="mb-1">Your Personal Information</h5>
                                            <p class="mb-4">Enter your personal information to get closer to copanies</p>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <label for="FisrtName" class="form-label">First Name</label>
                                                    <input type="text" class="form-control" id="FisrtName"
                                                        placeholder="First Name">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="LastName" class="form-label">Last Name</label>
                                                    <input type="text" class="form-control" id="LastName"
                                                        placeholder="Last Name">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="PhoneNumber" class="form-label">Phone Number</label>
                                                    <input type="text" class="form-control" id="PhoneNumber"
                                                        placeholder="Phone Number">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputEmail" class="form-label">E-mail Address</label>
                                                    <input type="text" class="form-control" id="InputEmail"
                                                        placeholder="Enter Email Address">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputCountry" class="form-label">Country</label>
                                                    <select class="form-select" id="InputCountry"
                                                        aria-label="Default select example">
                                                        <option selected>---</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputLanguage" class="form-label">Language</label>
                                                    <select class="form-select" id="InputLanguage"
                                                        aria-label="Default select example">
                                                        <option selected>---</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <button class="btn btn-primary px-4" onclick="stepper1.next()">Next<i
                                                            class='bx bx-right-arrow-alt ms-2'></i></button>
                                                </div>
                                            </div><!---end row-->

                                        </div>

                                        <div id="test-l-2" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger2">

                                            <h5 class="mb-1">Account Details</h5>
                                            <p class="mb-4">Enter Your Account Details.</p>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputUsername" class="form-label">Username</label>
                                                    <input type="text" class="form-control" id="InputUsername"
                                                        placeholder="jhon@123">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputEmail2" class="form-label">E-mail Address</label>
                                                    <input type="text" class="form-control" id="InputEmail2"
                                                        placeholder="example@xyz.com">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputPassword" class="form-label">Password</label>
                                                    <input type="password" class="form-control" id="InputPassword"
                                                        value="12345678">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputConfirmPassword" class="form-label">Confirm
                                                        Password</label>
                                                    <input type="password" class="form-control" id="InputConfirmPassword"
                                                        value="12345678">
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <button class="btn btn-outline-secondary px-4"
                                                            onclick="stepper1.previous()"><i
                                                                class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                        <button class="btn btn-primary px-4"
                                                            onclick="stepper1.next()">Next<i
                                                                class='bx bx-right-arrow-alt ms-2'></i></button>
                                                    </div>
                                                </div>
                                            </div><!---end row-->

                                        </div>

                                        <div id="test-l-3" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger3">
                                            <h5 class="mb-1">Your Education Information</h5>
                                            <p class="mb-4">Inform companies about your education life</p>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <label for="SchoolName" class="form-label">School Name</label>
                                                    <input type="text" class="form-control" id="SchoolName"
                                                        placeholder="School Name">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="BoardName" class="form-label">Board Name</label>
                                                    <input type="text" class="form-control" id="BoardName"
                                                        placeholder="Board Name">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="UniversityName" class="form-label">University Name</label>
                                                    <input type="text" class="form-control" id="UniversityName"
                                                        placeholder="University Name">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="InputCountry" class="form-label">Course Name</label>
                                                    <select class="form-select" id="InputCountry"
                                                        aria-label="Default select example">
                                                        <option selected>---</option>
                                                        <option value="1">One</option>
                                                        <option value="2">Two</option>
                                                        <option value="3">Three</option>
                                                    </select>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <button class="btn btn-outline-secondary px-4"
                                                            onclick="stepper1.previous()"><i
                                                                class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                        <button class="btn btn-primary px-4"
                                                            onclick="stepper1.next()">Next<i
                                                                class='bx bx-right-arrow-alt ms-2'></i></button>
                                                    </div>
                                                </div>
                                            </div><!---end row-->

                                        </div>

                                        <div id="test-l-4" role="tabpanel" class="bs-stepper-pane"
                                            aria-labelledby="stepper1trigger4">
                                            <h5 class="mb-1">Work Experiences</h5>
                                            <p class="mb-4">Can you talk about your past work experience?</p>

                                            <div class="row g-3">
                                                <div class="col-12 col-lg-6">
                                                    <label for="Experience1" class="form-label">Experience 1</label>
                                                    <input type="text" class="form-control" id="Experience1"
                                                        placeholder="Experience 1">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="Position1" class="form-label">Position</label>
                                                    <input type="text" class="form-control" id="Position1"
                                                        placeholder="Position">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="Experience2" class="form-label">Experience 2</label>
                                                    <input type="text" class="form-control" id="Experience2"
                                                        placeholder="Experience 2">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="PhoneNumber" class="form-label">Position</label>
                                                    <input type="text" class="form-control" id="PhoneNumber"
                                                        placeholder="Position">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="Experience3" class="form-label">Experience 3</label>
                                                    <input type="text" class="form-control" id="Experience3"
                                                        placeholder="Experience 3">
                                                </div>
                                                <div class="col-12 col-lg-6">
                                                    <label for="PhoneNumber" class="form-label">Position</label>
                                                    <input type="text" class="form-control" id="PhoneNumber"
                                                        placeholder="Position">
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <button class="btn btn-primary px-4"
                                                            onclick="stepper1.previous()"><i
                                                                class='bx bx-left-arrow-alt me-2'></i>Previous</button>
                                                        <button class="btn btn-success px-4"
                                                            onclick="stepper1.next()">Submit</button>
                                                    </div>
                                                </div>
                                            </div><!---end row-->

                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    


                    
                </div>
            </div>
        </div>
    </div> --}}

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

                        <form action="{{ route('category.store') }}" method="POST" id="myForm"
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
                                        <option ></option>
                                    </select>
                                </div>

                                <div class="col-lg-6">
                                    <label for="course_image" class="form-label">Course Image</label>
                                    <input type="file" class="form-control" id="course_image" name="course_image">
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
                                    <input type="text" class="form-control" id="course_resources" name="course_resources"
                                        placeholder="Enter Course Resources">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_certificate" class="form-label">Course Certificate</label>
                                    <select name="course_certificate" class="form-control" id="course_certificate">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_intovideo" class="form-label">course_intovideo</label>
                                    <input type="file" class="form-control" id="course_intovideo"
                                        name="course_intovideo" placeholder="Enter course_intovideo">

                                </div>
                                <div class="col-lg-6">
                                    <label for="course_price" class="form-label">Course Price</label>
                                    <input type="text" class="form-control" id="course_price" name="course_price"
                                        placeholder="Enter Course Price">
                                </div>
                                <div class="col-lg-6">
                                    <label for="course_discount" class="form-label">Course Discount</label>
                                    <input type="text" class="form-control" id="course_discount"
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
    {{-- <script>
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script> --}}
<script type="text/javascript">
        
    $(document).ready(function(){
        $('select[name="category_id"]').on('change', function(){
            alert('hello');
            var category_id = $(this).val();
            console.log(category_id);
            if (category_id) {
                $.ajax({
                    url: "{{ url('/subcategory/ajax') }}/"+category_id,
                    type: "GET",
                    dataType:"json",
                    
                    success:function(data){
                        console.log(data);
                        $('select[name="subcategory_id"]').html('');
                        var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.sub_category_name + '</option>');
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
