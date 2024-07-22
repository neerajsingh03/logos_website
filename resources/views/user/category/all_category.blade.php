@extends('front-layout.master')
@section('content')
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                        <h1 class="fashion_taital">{{__('lang.logos')}}</h1>
                    <div class="row">
                        @foreach($categories as $category)
                            <div class="card ml-5  mt-5" style="width:350px">
                                <img class="card-img-top" src="{{asset('/image/' .$category->cat_image ) }}" style="height:250px" alt="Card image">
                                <a
                                href="{{ route('single_category',['locale'=>app()->getLocale(),'id'=>$category->id])}}">{{ $category->category_name }}</a>
                            </div>
                     @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
