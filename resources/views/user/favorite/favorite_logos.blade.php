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
                        @foreach($favoriteLogos as $favoriteLogo)
                            <div class="card ml-5  mt-5" style="width:350px">
                                <img class="card-img-top" src="{{asset('/image/' .$favoriteLogo->logo->logo_image ) }}" style="height:250px" alt="Card image">
                            </div>
                            <div class="col-lg-6 p-5">
                                <div class="right-content">
                                    <h4>{{ $favoriteLogo->logo->name }}</h4>
                                    <div class="quote">
                                        <i class="fa fa-quote-left"></i>
                                        <p>{{ $favoriteLogo->logo->description }}</p>
                                    </div>
                                    <div class="total p-5">
                                        <h4>{{__('lang.price')}}: ₹<strong id="total_price">{{ $favoriteLogo->logo->price }}</strong></h4>
                                        <div class="main-border-button">
                                           <a href="{{route('add_to_cart',['locale'=>app()->getLocale(),'id'=>$favoriteLogo->logo->id]) }}">{{__('lang.add_to_cart')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection