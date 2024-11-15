<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">LMS</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    {{-- check if user is active or not --}}
    @php
        $id = Auth::user()->id;
        $data = App\Models\User::where('id', $id)->first();
        $satus = $data->status;
    @endphp
    @if ($satus == 'active')
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('instructor.dashboard') }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="bx bx-category"></i>
                    </div>
                    <div class="menu-title">Application</div>
                </a>
                <ul>
                    <li> <a href="app-emailbox.html"><i class='bx bx-radio-circle'></i>Email</a>
                    </li>
                </ul>
            </li>
            <li class="menu-label">Course</li>
            <li>
                <a href="{{ route('course.index') }}">
                    <div class="parent-icon"><i class='bx bx-code-alt'></i>
                    </div>
                    <div class="menu-title">Course list</div>
                </a>
            </li>
            <li class="menu-label">Pages</li>
            <li>
                <a class="has-arrow" href="javascript:;">
                    <div class="parent-icon"><i class="bx bx-lock"></i>
                    </div>
                    <div class="menu-title">Authentication</div>
                </a>
            </li>
        </ul>
    @else
        <ul class="metismenu" id="menu">
            <li class="menu-label text-danger">Your Account is Inactive</li>
        </ul>
    @endif

    <!--end navigation-->
</div>
