@extends('frontend.dashboard.user-dashboard')
@section('content')
<div class="dashboard-content-wrap">
    <div class="mb-4 ml-3 dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent">
        <i class="mr-1 la la-bars"></i> Dashboard Nav
    </div>
    <div class="container-fluid">
        <div class="flex-wrap mb-5 breadcrumb-content d-flex align-items-center justify-content-between">
            <div class="media media-card align-items-center">
                <div class="rounded-full media-img media--img media-img-md">
                    <img class="rounded-full" src="{{(!empty($profileData->avatar)) ? url('uploads/user_images/' . $profileData->avatar) : url('uploads/no_image.jpg')}}" alt="Student thumbnail image">
                </div>
                <div class="media-body">
                    <h2 class="section__title fs-30">Howdy, {{$profileData->name}}</h2>
                    <div class="pt-2 rating-wrap d-flex align-items-center">
                        <div class="review-stars">
                            <span class="rating-number">4.4</span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star"></span>
                            <span class="la la-star-o"></span>
                        </div>
                        <span class="pl-1 rating-total">(20,230)</span>
                    </div><!-- end rating-wrap -->
                </div><!-- end media-body -->
            </div><!-- end media -->
            <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">
                <input type="file" name="files[]" class="multi file-upload-input">
                <span class="file-upload-text"><i class="mr-2 la la-upload"></i>Upload a course</span>
            </div><!-- file-upload-wrap -->
        </div><!-- end breadcrumb-content -->
        <div class="mb-5 section-block"></div>
        <div class="mb-5 dashboard-heading">
            <h3 class="fs-22 font-weight-semi-bold">My Profile</h3>
        </div>
        <div class="mb-5 profile-detail">
            <ul class="generic-list-item generic-list-item-flash">
                <li><span class="profile-name">Registration Date:</span><span class="profile-desc">{{ Carbon\Carbon::parse($profileData->created_at)->format('d M Y')}}</span></li>
                @php 
                    $fname = $profileData->name;
                    $fname = explode(' ', $fname);
                    $fname = $fname[0];
                    $lname = $profileData->name;
                    $lname = explode(' ', $lname);
                    $lname = $lname[1];
                @endphp
                <li><span class="profile-name">First Name:</span><span class="profile-desc">{{$fname}}</span></li>
                <li><span class="profile-name">Last Name:</span><span class="profile-desc">{{$lname}}</span></li>
                <li><span class="profile-name">User Name:</span><span class="profile-desc">{{$profileData->username}}</span></li>
                <li><span class="profile-name">Email:</span><span class="profile-desc">{{$profileData->email}}</span></li>
                <li><span class="profile-name">Phone Number:</span><span class="profile-desc">{{$profileData->phone}}</span></li>
                <li>
                    <span class="profile-name">Bio:</span>
                    <span class="profile-desc">{{$profileData->name}}</span>
                </li>
            </ul>
        </div>
        <div class="pb-4 row align-items-center dashboard-copyright-content">
            <div class="col-lg-6">
                <p class="copy-desc">&copy; 2021 Aduca. All Rights Reserved. by <a href="https://techydevs.com/">TechyDevs</a></p>
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <ul class="flex-wrap generic-list-item d-flex align-items-center fs-14 justify-content-end">
                    <li class="mr-3"><a href="terms-and-conditions.html">Terms & Conditions</a></li>
                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                </ul>
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container-fluid -->
</div>
@endsection