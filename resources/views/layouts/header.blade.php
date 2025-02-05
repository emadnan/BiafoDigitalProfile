@php
$permissions= session()->get('permissions');
@endphp
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
         @if(isset($permissions['can_view_roles']) || Auth::user()->user_type == "super_admin")
         <li class="nav-item ml-4">
             <a class="nav-link" href="/roles" role="button">Roles</a>
         </li>
            @endif
            @if(isset($permissions['can_view_permissions']) || Auth::user()->user_type == "super_admin")
         <li class="nav-item ml-4">
             <a class="nav-link" href="/permissions" role="button">Permissions</a>
         </li>
            @endif
            @if(Auth::user()->user_type == "super_admin")
         <li class="nav-item ml-4">
             <a class="nav-link" href="/subscription" role="button">Subscription</a>
         </li>
            @endif
     </ul>

     <!-- Right navbar links -->
     <ul class="navbar-nav ml-auto">
         <!-- Navbar Search -->
         <!-- <li class="nav-item">
             <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                 <i class="fas fa-search"></i>
             </a>
             <div class="navbar-search-block">
                 <form class="form-inline">
                     <div class="input-group input-group-sm">
                         <input class="form-control form-control-navbar" type="search" placeholder="Search"
                             aria-label="Search">
                         <div class="input-group-append">
                             <button class="btn btn-navbar" type="submit">
                                 <i class="fas fa-search"></i>
                             </button>
                             <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                 <i class="fas fa-times"></i>
                             </button>
                         </div>
                     </div>
                 </form>
             </div>
         </li> -->

         <!-- Notifications -->
         <style>
         .badge_n {
             position: absolute;
             top: -1px;
             right: -2px;
             padding: 3px 3px;
             border-radius: 25%;
             background-color: red;
             color: white;
         }
         </style>
         <!-- <li class="nav-item dropdown">
             <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                 <i class="fas fa-bell"></i>
                 <span class="badge bg-danger count"></span>
             </a>
             <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" id="notifications">



                 <a href="" class="dropdown-item dropdown-footer">See All Notifications</a>
             </div> -->
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         <li class="nav-item">
             <!-- <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                 <i class="fas fa-th-large"></i>
             </a> -->
             @guest
             @if (Route::has('login'))
         <li class="nav-item">
             <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
         </li>
         @endif

         @if (Route::has('register'))
         <li class="nav-item">
             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
         </li>
         @endif
         @else
         <li class="nav-item dropdown">
             <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false" v-pre>
                 {{ Auth::user()->name }}
             </a>

             <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                 <a class="dropdown-item" href="{{ route('home') }}">
                 <i class="nav-icon fas fa-tachometer-alt"></i>&nbsp;
                     {{ __('Dashboard') }}
                 </a>
                 <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                         class="fa-solid fa-right-from-bracket"></i>&nbsp;
                     {{ __('Logout') }}
                 </a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>
             </div>
         </li>
         @endguest
         </li>
     </ul>
 </nav>
