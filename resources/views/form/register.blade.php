@extends('front-layout.master')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <center>
        <div class="nk-block nk-block-middle nk-auth-body wide-xs">
            <div class="brand-logo pb-4 text-center">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x"
                        alt="logo">
                    <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                        srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div>
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="card card-bordered">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">{{__('lang.register')}}</h4>
                            <div class="nk-block-des">
                                <p>{{__('lang.create_new_logo_account')}}</p>
                            </div>
                        </div>
                    </div>
                    <form action="{{route('register',['locale'=>app()->getLocale()])}}" method="post">
                        @csrf
                        <div class="form-group col-md-6">
                            <label class="form-label" for="name">{{__('lang.name')}}</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control form-control-lg" name="name"
                                    placeholder="{{__('lang.enter_your_name')}}">
                                <span>
                                    @if($errors->has('name'))
                                        <div class="error text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="email">{{__('lang.email')}}</label>
                            <div class="form-control-wrap">
                                <input type="email" class="form-control form-control-lg" name="email"
                                    placeholder="{{__('lang.enter_your_email')}}">
                                <span>
                                    @if($errors->has('email'))
                                        <div class="error text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="password">{{__('lang.password')}}</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" name="password"
                                    placeholder="{{__('lang.enter_your_password')}}">
                                <span>
                                    @if($errors->has('password'))
                                        <div class="error text-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label" for="confirm">{{__('lang.confirm_password')}}</label>
                            <div class="form-control-wrap">
                                <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirm">
                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                </a>
                                <input type="password" class="form-control form-control-lg" name="password_confirmation"
                                    placeholder="{{__('lang.enter_your_confirm_password')}}">
                                <span>
                                    @if($errors->has('password_confirmation'))
                                        <div class="error text-danger">{{ $errors->first('password_confirmation') }}</div>
                                    @endif
                                </span>                                
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">{{__('lang.number')}}</label>
                            <div class="form-control-wrap">
                                <input min=0  type="number" class="form-control form-control-lg" name="number"
                                    placeholder="{{__('lang.enter_your_number')}}">
                                <span>
                                    @if($errors->has('number'))
                                        <div class="error text-danger">{{ $errors->first('number') }}</div>
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                            <div class="form-control form-control-lg">
                                <select id="role"
                                    class="form-control @error('role') is-invalid @enderror" name="role"
                                    required>
                                    <option value="user">{{__('lang.user')}}</option>
                                    <option value="designer">{{__('lang.designer')}}</option>
                                    {{-- <option value="admin">admin</option> --}}
                                </select>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <div class="custom-control custom-control-xs custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox">
                                <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy
                                        Policy</a> &amp; <a href="#"> Terms.</a></label>
                            </div>
                        </div> --}}
                        <div class="form-group col-md-6">
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">{{__('lang.register')}}</button>
                        </div>
                    </form>
                    {{-- <div class="form-note-s2 text-center pt-4"> Already have an account? <a
                            href="html/pages/auths/auth-login-v2.html"><strong>Sign in instead</strong></a>
                    </div>
                    <div class="text-center pt-4 pb-3">
                        <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                    </div> --}}
                    <ul class="nav justify-center gx-8">
                        <li class="nav-item"><a class="nav-link" href="#">{{__('lang.facebook')}}</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">{{__('lang.google')}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </center>
    <div class="nk-footer nk-auth-footer-full">
        <div class="container wide-lg">
            <div class="row g-3">
                {{-- <div class="col-lg-6 order-lg-last">
                    <ul class="nav nav-sm justify-content-center justify-content-lg-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Terms & Condition</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                        <li class="nav-item dropup">
                            <a class="dropdown-toggle dropdown-indicator has-indicator nav-link"
                                data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                <ul class="language-list">
                                    <li>
                                        <a href="#" class="language-item">
                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                            <span class="language-name">English</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                            <span class="language-name">Español</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                            <span class="language-name">Français</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="language-item">
                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                            <span class="language-name">Türkçe</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div> --}}
                <div class="col-lg-6">
                    {{-- <div class="nk-block-content text-center text-lg-start">
                        <p class="text-soft">&copy; 2022 Dashlite. All Rights Reserved.</p>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- wrap @e -->
@endsection