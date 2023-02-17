@php
$permissions= session()->get('permissions');
@endphp
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/home')}}" class="brand-link" style="text-decoration: none;">
        <img src="{{asset('frontend\img\logo_3.png')}}" alt="Logo"
            class="img-fluid" style="width: 100%; height: 100%;">
            <!-- <p>Comply Techs</p> -->
        <!-- <span class="font-weight-light">Comply Techs</span> -->
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div> --}}

        <!-- SidebarSearch Form
        <div class="form-inline mt-3 mb-5">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control" type="search"  aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!--Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li  >
                    <a href="{{ route('home') }}"
                        class="{{ request()->routeIs('home') ? 'nav-link active' : 'nav-link text-white' }}">
                        <i class="nav-icon fa-solid fa-address-card"></i>
                        <p >
                            @if(auth()->user()->user_type == 'company')
                           Employees
                           @else
                            My Cards
                            @endif

                        </p>
                    </a>
                </li>
                <!-- <li>
                    <a class="nav-link text-white"
                        href="#"><i class="nav-icon fa-solid fa-mountain-sun"></i>
                        <p >
                            Backgrounds
                        </p>
                    </a>
                </li> -->
                @if(isset($permissions['can_view_company_profile']))
                <li>
                    <a class="{{ request()->routeIs('company_profile') ? 'nav-link active' : 'nav-link text-white' }}"
                        href="{{ route('company_profile') }}"><i class="nav-icon fa-solid fa-building"></i>
                        <p >
                            Company Profile
                        </p>
                    </a>
                </li>
                @endif
                @if(isset($permissions['can_view_feature_requests']))
                <li  >

                <!-- Request features -->
                <a class="{{ request()->routeIs('lists_feature_requets') ? 'nav-link active' : 'nav-link text-white' }}"
                        href="{{ route('lists_feature_requets') }}"><i class=" nav-icon fa-solid fa-list"></i>
                        <p >
                           Feature Requests
                        </p>
                    </a>
                </li>
                @endif
                <!-- <li  >
                    <a class="nav-link text-white"
                        href="#"><i class="nav-icon fas fa-bell"></i>
                        <p >Notifications
                        </p>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
