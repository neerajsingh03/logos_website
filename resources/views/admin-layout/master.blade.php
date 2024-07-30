<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ url ('/admin//images/favicon.png ') }}">
    <!-- Page Title  -->
    <title> Admin Site</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href=" {{ url ('/admin/assets/css/dashlite.css') }}">
    <link id="skin-default" rel="stylesheet" href="{{ url ('/admin/assets/css/theme.css ') }}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <div class="nk-sidebar-brand"> 
                            <h5 class="text-primary">{{__('lang.admin_dashboard')}}</h5>
                       </div>
                    </div>
                </div><!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element nk-sidebar-body">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">{{__('lang.use_case_preview')}}</h6>
                                </li>
                                <li class="nk-menu-item">
                                    <a href="{{route('admin-dashboard')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                                        <span class="nk-menu-text">{{__('lang.dashboard')}}</span>
                                    </a>
                                </li>     
                                <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                                        <span class="nk-menu-text">{{__('lang.logos')}}</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('logo_request',['locale'=>app()->getLocale()])}}" class="nk-menu-link"><span class="nk-menu-text">{{__('lang.logo_request')}}</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('approve_logo',['locale'=>app()->getlocale()])}}" class="nk-menu-link"><span class="nk-menu-text">{{__('lang.approved_logo')}}</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('disapprove_logo',['locale'=>app()->getlocale()])}}" class="nk-menu-link"><span class="nk-menu-text">{{__('lang.disapproved_logo')}}</span>   </a>
                                        </li>
                                    </ul><!-- .nk-menu-sub -->
                                </li>  <!-- .nk-menu-item has-sub -->
                                <li class="nk-menu-item has-sub">
                                    <a href="{{route('admin_dashboard',['locale'=>app()->getLocale()])}}" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-table-view"></em></span>
                                        <span class="nk-menu-text">{{__('lang.designer')}}</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin_dashboard',['locale'=>app()->getLocale()])}}" class="nk-menu-link"><span class="nk-menu-text">{{__('lang.designer_request')}}</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin_dashboard',['locale'=>app()->getLocale()])}}" class="nk-menu-link"><span class="nk-menu-text">{{__('lang.approved_designer')}}</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('admin_dashboard',['locale'=>app()->getLocale()])}}" class="nk-menu-link"><span class="nk-menu-text">{{__('lang.disapproved_designer')}}</span>   </a>
                                        </li>
                                       
                                    </ul><!-- .nk-menu-sub -->
                                </li>  <!-- .nk-menu-item has-sub -->
                                <li class="nk-menu-item">
                                    <a href="{{url('user-profile')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-text-rich"></em></span>
                                        <span class="nk-menu-text">Users</span>
                                    </a>
                                </li>
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-news d-none d-xl-block">
                                <div class="nk-news-list">
                                    <a class="nk-news-item" href="#">
                                        <div class="nk-news-icon">
                                            <em class="icon ni ni-card-view"></em>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="./images/flags/english-sq.png" alt="">
                                            </div>
                                        </a>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                @if(Auth()->user())
                                                    <div class="user-info">
                                                        <span class="lead-text">{{auth()->user()->name}}</span>
                                                        <span class="sub-text">{{auth()->user()->email}}</span>
                                                        
                                                    </div>
                                                    @endif 
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    @if(Auth()->user())
                                                    <div class="user-info">
                                                        <span class="lead-text">{{auth()->user()->name}}</span>
                                                        <span class="sub-text">{{auth()->user()->email}}</span>
                                                        
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="{{url('change-password')}}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{route('logout',['locale'=>app()->getLocale()])}}"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown notification-dropdown me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                @yield('content')
                  <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 {{__('lang.dashLite_template_by')}} <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link text-base" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/',['locale' => 'en'])}}" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/',['locale'=>'fr'])}}" class="language-item">
                                                        <span class="language-name">French</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/',['locale'=>'hi'])}}" class="language-item">
                                                        <span class="language-name">Hindi</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
        <!-- JavaScript -->
        <script src="{{ url ('/admin/assets/js/bundle.js ') }}"></script>
        <script src="{{ url ('/admin/assets/js/scripts.js ') }}"></script>
        <script src="{{ url ('/admin/assets/js/charts/gd-analytics.js ') }}"></script>
        <script src="{{ url ('/admin/assets/js/libs/jqvmap.js ') }}"></script>
</body>

</html>