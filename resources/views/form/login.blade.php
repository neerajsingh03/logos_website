@extends('front-layout.master') 
@section('content')
<div class="nk-wrap nk-wrap-nosidebar">
    <!-- content @s -->
    <div class="nk-content ">
        <div class="nk-split nk-split-page nk-split-lg">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <center>
                    <div class="nk-block nk-block-middle nk-auth-body">
                        <div class="brand-logo pb-5">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h5 class="nk-block-title">{{__('lang.sign_in')}}</h5>
                            </div>
                        </div><!-- .nk-block-head -->
                        <form action="{{route('login_process',['locale'=>app()->getLocale()] ) }}" method="post" class="form-validate is-alter" autocomplete="off">
                            @csrf
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="email-address">{{__('lang.email')}}</label>
                                    {{-- <a class="link link-primary link-sm" tabindex="-1" href="#">Need Help?</a> --}}
                                </div>
                                <div class="form-control-wrap col-md-6">
                                    <input autocomplete="off" type="email" name="email" class="form-control form-control" required id="email-address" placeholder="{{__('lang.enter_your_name')}}">
                                </div>
                            </div><!-- .form-group -->
                            <div class="form-group">
                                <div class="form-label-group">
                                    <label class="form-label" for="password">{{__('lang.password')}}</label>
                                    {{-- <a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">Forgot Code?</a> --}}
                                </div>
                                <div class="form-control-wrap col-md-6">
                                    <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                    </a>
                                    <input autocomplete="new-password" type="password" name="password" class="form-control form-control-lg" required id="password" placeholder="{{__('lang.enter_your_password')}}">
                                </div>
                            </div><!-- .form-group -->
                            <div class="form-group col-md-6">
                                <button  class="btn btn-lg btn-primary btn-block">{{__('lang.sign_in')}}</button>
                                {{-- <a href="{{route('login_process',['locale'=>app()->getLocale()])}}">{{__('lang.sign_in')}}</a> --}}
                            </div>
                            @if (session('error'))
                                <div class="alert alert-danger">{{ session('error') }} </div>
                            @endif
                        </form><!-- form -->
                        <div class="form-note-s2 pt-4"> {{__('lang.new_on_our_platform')}}? <a href="{{route('register',['locale'=>app()->getLocale()])}}">{{__('lang.create_an_account')}}</a></div>
                        <div class="text-center pt-4 pb-3">
                            <h6 class="overline-title overline-title-sap"><span>{{__('lang.or')}}</span></h6>
                        </div>
                        <ul class="nav justify-center gx-4">
                            <li class="nav-item"><a class="nav-link" href="https://www.facebook.com/">{{__('lang.facebook')}}</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://www.google.co.in/">{{__('lang.google')}}</a></li>
                        </ul>
                    </div><!-- .nk-block -->
                </center>
            </div><!-- .nk-split-content -->
        </div><!-- .nk-split -->
    </div>
    <!-- wrap @e -->
</div>
@endsection