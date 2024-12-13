<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- site metas -->
    <title>Logo WebSite</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="{{asset('/images/favicon.png')}}">

    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/user/css/bootstrap.min.css')}}">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/user/css/style.css')}}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{asset('/user/css/responsive.css')}}">
    <!-- fevicon -->
    <link rel="icon" href="{{asset('/user/images/fevicon.png')}}" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{asset('/user/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- Tweaks for older IEs -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- owl stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('/user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">

    <style>
    .row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -21px;
        margin-left: 92px;
        margin-top: 11px;
    }

    .main-border-button {
        background-color: #04AA6D;
        border: none;
        color: white;
        padding: 6px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
    }
    </style>
</head>

<body>
    <!-- banner bg main start -->
    <div class="banner_bg_main">
        <!-- header top section start -->
        <div class="container">
            <div class="header_section_top">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_menu">
                            <ul>
                                <li><a
                                        href="{{route('index',['locale'=>app()->getLocale()])}}">{{__('lang.home_page')}}</a>
                                </li>
                                <li>{{ __('lang.welcome') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header top section end -->
        <!-- logo section start -->
        <div class="logo_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo"><a href="{{route('index',['locale'=>app()->getLocale()])}}"><img
                                    src="{{asset('/user/images/logo.png')}}"></a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- logo section end -->
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <div class="containt_main">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <a href="{{route('index',['locale'=>app()->getLocale()])}}">{{__('lang.home')}}</a>
                        <a href="{{route('category',['locale'=>app()->getlocale()])}}">{{__('lang.category')}}</a>
                        <a
                            href="{{route('user_cart_item',['locale'=>app()->getLocale()])}}">{{__('lang.your_logos')}}</a>
                        <a
                            href="{{route('user_favorite_logo',['locale'=>app()->getLocale()] ) }}">{{__('lang.your_favorite_logos')}}</a>
                    </div>
                    <span class="toggle_icon" onclick="openNav()"><img
                            src="{{asset('/user/images/toggle-icon.png')}}"></span>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{__('lang.category')}}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item"
                                href="{{route('category',['locale'=>app()->getLocale()])}}">{{__('lang.all_logos')}}</a>
                        </div>
                    </div>
                    <div class="main">
                        <!-- Another variation with a button -->
                        <form action="{{route('search',['locale'=>app()->getLocale()])}}" method="GET">
                            <div class="input-group">
                                <input type="text" id="search" name="search" class="form-control"
                                    placeholder="{{__('lang.search_this_blog')}}">
                                <div class="input-group-append">
                                    <button class="btn btn-secondary" type="submit"
                                        style="background-color: #f26522; border-color:#f26522">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="header_box">
                        <div class="lang_box ">
                            <a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
                                @if(auth()->user())
                                <span class="lead-text">{{auth()->user()->name}}</span>
                                <a href="{{ route('switch.role') }}" class="btn btn-primary">Switch Account</a>
                                @else <span>{{'Guest'}}</span>
                                @endif
                            </a>
                            @if(auth()->user())
                            <div class="dropdown-menu ">
                                <a href="{{route('logout',['locale'=>app()->getLocale()])}}"
                                    class="dropdown-item">{{__('lang.sign_out')}}</a>
                            </div>
                            @else
                            <div class="dropdown-menu ">
                                <a href="{{route('login',['locale'=>app()->getLocale()])}}"
                                    class="dropdown-item">{{__('lang.login')}}</a>
                            </div>
                            @endif
                        </div>
                        <div class="login_menu">
                            <ul>
                                <li>
                                    @if(Auth::check())
                                    <a href="{{ url('user-cart-item') }}"><i class="fa fa-shopping-cart"
                                            aria-hidden="true">{{__('lang.cart')}}</i>
                                        @else
                                        <a href="{{url('login?redirect_url='.url('user-cart-item'))}}"><i
                                                class="fa fa-shopping-cart" aria-hidden="true">{{__('lang.cart')}}</i>
                                            @endif
                                            @if(auth()->user())
                                            <span class="padding_10">{{$counts}}</span></a>
                                    </a>
                                </li>
                                <li>
                                    <a href=" {{route('user_favorite_logo',['locale'=>app()->getLocale()] ) }}">{{__('lang.favorite')}}<svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px">
                                            <path fill="#c12f7d"
                                                d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z" />
                                        </svg></a>
                                </li>
                                @else
                                <li><a href="{{route('register',['locale'=>app()->getLocale()])}}">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header section end -->
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="my_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">{{__('lang.get_start')}}
                                        <br>{{__('lang.Your_favriot_shoping')}}</h1>
                                    <div class="buynow_bt"><a
                                            href="{{route('category',['locale'=>app()->getLocale()])}}">{{__('lang.buy_now')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">
                                        {{__('lang.get_start')}}<br>{{__('lang.Your_favriot_shoping')}}</h1>
                                    <div class="buynow_bt"><a
                                            href="{{route('category',['locale'=>app()->getLocale()])}}">{{__('lang.buy_now')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">
                                        {{__('lang.get_start')}}<br>{{__('lang.Your_favriot_shoping')}}</h1>
                                    <div class="buynow_bt"><a
                                            href="{{route('category',['locale'=>app()->getLocale()])}}">{{__('lang.buy_now')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    @yield('content')
    <!-- Example usage of translation -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_logo"><a href="{{route('index',['locale'=>app()->getLocale()])}}"><img
                        src="{{asset('/user/images/footer-logo.png')}}"></a></div>
            <div class="input_bt">
                <input type="text" class="mail_bt" placeholder="{{__('lang.your_email')}}" name="Your Email">
                <span class="subscribe_bt" id="basic-addon2"><a href="#">{{__('lang.subscribe')}}</a></span>
            </div>
            <div class="footer_menu">
                <ul>
                    <li><a href="{{url('/',['locale' => 'en'])}}">English</a></li>
                    <li><a href="{{url('/',['locale' => 'fr'])}}">French</a></li>
                    <li><a href="{{url('/',['locale' => 'hi'])}}">Hindi</a></li>
                </ul>
            </div>
            <div class="location_main">{{__('lang.help_line_number')}} : <a href="#">+1 1800 1200 1200</a></div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">© 2020 {{__('lang.all_rights_reserved_design_by')}}<a
                    href="https://html.design">{{__('lang.free_html_templates')}}</a></p>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="{{asset('/user/js/jquery.min.js')}}"></script>
    <script src="{{asset('/user/js/popper.min.js')}}"></script>
    <script src="{{asset('/user/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/user/js/plugin.js')}}"></script>
    <!-- sidebar -->
    <script src="{{asset('/user/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script src="{{asset('/user/js/custom.js')}}"></script>
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
</body>

</html>