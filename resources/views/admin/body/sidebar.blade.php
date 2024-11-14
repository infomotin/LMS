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
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}">
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
        {{-- Category  --}}
        
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{route('category.index')}}"><i class='bx bx-radio-circle'></i>Category</a>
                </li>
                
            </ul>
        </li>


        
        <li class="menu-label">UI Elements</li>
        
        
        <li>
            <a href="form-froala-editor.html">
                <div class="parent-icon"><i class='bx bx-code-alt'></i>
                </div>
                <div class="menu-title">Froala Editor</div>
            </a>
        </li>
        <li class="menu-label">Forms & Tables</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class='bx bx-message-square-edit'></i>
                </div>
                <div class="menu-title">Forms</div>
            </a>
            <ul>
                <li> <a href="form-elements.html"><i class='bx bx-radio-circle'></i>Form Elements</a>
                </li>
                
            </ul>
        </li>
        
        <li class="menu-label">Pages</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-lock"></i>
                </div>
                <div class="menu-title">Authentication</div>
            </a>
            <ul>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Basic</a>
                    <ul>
                        <li><a href="auth-basic-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign
                                In</a></li>
                        
                    </ul>
                </li>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Cover</a>
                    <ul>
                        <li><a href="auth-cover-signin.html" target="_blank"><i class='bx bx-radio-circle'></i>Sign
                                In</a></li>
                        
                </li>
                <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>With Header Footer</a>
                    <ul>
                        <li><a href="auth-header-footer-signin.html" target="_blank"><i
                                    class='bx bx-radio-circle'></i>Sign In</a></li>
                        
                    </ul>
                </li>
            </ul>
        </li>
        
        <li class="menu-label">Charts & Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul>
                <li> <a href="charts-apex-chart.html"><i class='bx bx-radio-circle'></i>Apex</a>
                </li>
                
            </ul>
        </li>
        
        <li class="menu-label">Others</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-menu"></i>
                </div>
                <div class="menu-title">Menu Levels</div>
            </a>
            <ul>
                <li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level One</a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Level Two</a>
                            <ul>
                                <li> <a href="javascript:;"><i class='bx bx-radio-circle'></i>Level Three</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        
    </ul>
    <!--end navigation-->
</div>
