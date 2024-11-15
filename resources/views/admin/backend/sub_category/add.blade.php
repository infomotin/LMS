@extends('admin.admin_dashboard')
@section('admin')
{{-- cdn jquery  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">SubCategory</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Add SubCategory</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('sub-category.store') }}" method="POST" id="myForm" >
                                @csrf
                                <div class="row mb-3 ">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Category Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary form-group">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3 ">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Sub Category Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary form-group">
                                        <input type="text" name="sub_category_name" id="sub_category_name" class="form-control" />
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="submit" class="px-4 btn btn-primary" value="Add" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    sub_category_name: {
                        required : true,
                    }, 
                    category_id: {
                        required : true,
                    }
                    
                    
                },
                messages :{
                    sub_category_name: {
                        required : 'Please Enter Category Name',
                    },
                    category_id: {
                        required : 'Please Enter Category Image',
                    }
                     
    
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>
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
@endsection
