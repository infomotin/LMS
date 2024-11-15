@extends('admin.admin_dashboard')
@section('admin')
{{-- jquery cdn link import here --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
    .large-checkbox {
        transform: scale(1.5);
    }
</style>
    <!--breadcrumb-->
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                        <div class="breadcrumb-title pe-3">All Instractor</div>
                        <div class="ps-3">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">All Instractor</li>
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

                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example2" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Instrator </th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Status</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($instructors as $item)
                                                <tr>
                                                    <td>{{ $item->id }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->phone }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    <td>
                                                        @if ($item->status == 'active')
                                                            <span class="btn btn-success" id="active">Active</span>
                                                        @else
                                                            <span class="btn btn-danger" id="active">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="form-check-danger form-check form-switch">
                                                            <input class="form-check-input status-toggle large-checkbox "  type="checkbox"
                                                                id="flexSwitchCheckChecked" data-user-id="{{ $item->id }}" {{ $item->status == 'active' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="flexSwitchCheckChecked"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Sl</th>
                                                <th>Instrator </th>
                                                <th>Phone</th>
                                                <th>Email</th>
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

    <script>
        $(document).ready(function() {
            $('.status-toggle').on('change', function() {
                var status = $(this).prop('checked') ? 'active' : 'inactive';
                var userId = $(this).data('user-id');
                // alert('status: ' + status + ', user_id: ' + userId);
                $.ajax({
                    url: "{{ route('admin.instructor.status.update') }}",
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: status,
                        user_id: userId
                    },
                    reload : true,
                    success: function(response) {
                        
                        toastr.success(response.message);
                        location.reload();
                    }
                });
            });
        });
    </script>
@endsection
