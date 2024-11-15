@extends('instructor.instructor_dashboard')
@section('instructor')
<div class="container">
    <div class="main-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">All Cources </div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All Cources</li>
                            </ol>
                        </nav>
                    </div>
                    {{--  --}}
                </div>
                <!--end breadcrumb-->


                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h6 class="mb-0">All Cources</h6>
                            <a href="{{ route('course.create') }}" class="btn btn-primary text-white ms-auto">Add Cources</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Category Name</th>
                                            <th>subcategory name</th>
                                            <th>Instractor name</th>
                                            <th>Cources Name</th>
                                            <th>Title </th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Status</th> 
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item['category']['category_name'] }}</td>
                                            <td>{{ $item['subcategory']['sub_category_name'] }}</td>
                                            <td>{{ $item['instructor']['name'] }}</td>
                                            <td>{{ $item->course_title }}</td>
                                            <td>{{ $item->course_description }}</td>
                                            <td>{{ $item->course_duration }}</td>
                                            <td>{{ $item->course_price }}</td>
                                            <td>
                                                <img src="{{ asset($item->course_image) }}" alt="" style="width: 50px; height: 50px;">
                                            </td>
                                            <td>
                                                @if ($item->course_status == 1)
                                                    <span class="text-success">Active</span>
                                                @else
                                                    <span class="text-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-info">Edit</a>
                                                <a href="#" id="delete" class="btn btn-danger">Delete</a>
                                            </td> 
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl</th>
                                            <th>Category Name</th>
                                            <th>subcategory name</th>
                                            <th>Instractor name</th>
                                            <th>Cources Name</th>
                                            <th>Title </th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th>Duration</th>
                                            <th>Status</th> 
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection