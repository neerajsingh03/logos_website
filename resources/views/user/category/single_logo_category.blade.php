@extends('front-layout.master')
@section('content')
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                        <h1 class="fashion_taital">{{__('lang.logos')}}</h1>
                    <div class="row">
                        @csrf
                        @foreach($category as $singleCategory)
                            <div class="card ml-5  mt-5" style="width:350px">
                                <img class="card-img-top" src="{{asset('/image/' .$singleCategory->logo_image ) }}" style="height:250px" alt="Card image">
                            </div>
                            <div class="col-lg-6 p-5">
                                <div class="right-content">
                                    <h4>{{ $singleCategory->name }}</h4>
                                    <div class="quote">
                                        <i class="fa fa-quote-left"></i>
                                        <p>{{ $singleCategory->description }}</p>
                                    </div>
                                    <div class="total p-5">
                                        <h4>{{__('lang.price')}}: ₹<strong id="total_price">{{ $singleCategory->price }}</strong></h4>
                                        <div class="main-border-button"> <a
                                            href="{{ route('add_to_cart',['id'=>$singleCategory->id,'locale'=>app()->getLocale()]) }}">{{__('lang.add_to_cart')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
        <i class="fa fa-angle-left"></i>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
        <i class="fa fa-angle-right"></i>
        </a> --}}
    </div>
</div>
@endsection