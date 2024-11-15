@extends('admin.admin_dashboard')
@section('admin')
    <!--breadcrumb-->
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
                                    <li class="breadcrumb-item active" aria-current="page">SubCategory</li>
                                </ol>
                            </nav>
                        </div>
                        {{--  --}}
                    </div>
                    <!--end breadcrumb-->


                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h6 class="mb-0">All Category</h6>
                                <a href="{{ route('sub-category.create') }}" class="btn btn-primary text-white ms-auto">Add
                                    Sub Category</a>
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
                                                <th>Sub-Category Name</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($subcategories as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item['category']['category_name'] }}</td>
                                                    <td>{{ $item->sub_category_name }}</td>

                                                    <td>
                                                        @if ($item->sub_category_status == 'active')
                                                            <span class="text-success">Active</span>
                                                        @else
                                                            <span class="text-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('sub-category.edit', $item->id) }}"
                                                            class="btn btn-info">Edit</a>
                                                        <a href="{{ route('sub-category.destroy', $item->id) }}"
                                                            id="delete" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Category Name</th>
                                                <th>Sub-category Name</th>
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
