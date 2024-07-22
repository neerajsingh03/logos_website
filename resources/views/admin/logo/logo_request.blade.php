@extends('admin-layout.master')
@section('content')
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            @if (session('msg'))
                                <div id="success-alert" class="alert alert-success">
                                    {{ session('msg') }}
                                </div>
                            @endif
                            @if (session('empty'))
                            <div id="success-alert" class="alert alert-success">
                                {{ session('empty') }}
                            </div>
                        @endif
                        </div>
                        <div class="nk-block-head-content">
                            <a href="#" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-download-cloud"></em><span>Download All</span></a>
                            <a href="#" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-download-cloud"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-sm-6 col-lg-4 col-xxl-3">
                            @foreach($logos as $logo)
                                <div class="gallery card card-bordered">
                                    <a class="gallery-image popup-image" href="./images/stock/a.jpg">
                                        <img class="w-100 rounded-top"src="{{ url('/image/' . $logo->logo_image) }}" alt="">
                                    </a>
                                    <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                        <div class="user-card">
                                            {{-- <div class="user-avatar">
                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                            </div> --}}
                                            <div class="user-info">
                                                <span class="lead-text">{{$logo->name}}</span>
                                                <span class="sub-text"></span>
                                            </div>
                                        </div>
                                        <div>
                                            {{-- <button class="btn btn-p-0 btn-nofocus"><em class="icon ni ni-heart"></em><span></span></button> --}}
                                        </div>
                                        <div class="">
                                            <a href="{{route('logo_approve',['id'=>$logo->id,'locale'=>app()->getLocale()]) }}" class="btn btn-primary ">{{__('lang.approve')}}</a>
                                            <a href="{{route('logo_disapprove',['id'=>$logo->id,'locale'=>app()->getLocale()]) }}" class="btn btn-danger ">{{__('lang.disapprove')}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach    
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection