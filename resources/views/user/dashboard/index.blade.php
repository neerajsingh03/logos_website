@extends('front-layout.master')
@section('content')
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <h1 class="fashion_taital">{{__('lang.logos')}}</h1>
                    @if(session('msg'))
                        <div id="success-alert" class="alert alert-success">
                            <h4>{{session('msg')}}</h4>
                        </div>
                    @endif
                    <div class="fashion_section_2">
                        <div class="row logs_main_div">
                            @foreach($logos as $logo)
                            <div class="card ml-5  mt-5" style="width:200px">
                                <a href=" {{route('add_to_favorite',['locale'=>app()->getLocale(),'id'=>$logo->id])}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px"><path fill="#c12f7d" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg></a>
                                <img class="card-img-top" class="fa-regular fa-heart" src="{{asset('/image/' .$logo->logo_image ) }}" style="height:250px" alt="Card image">
                                <div class="card-body">
                                <a href="{{route('logo_details',['locale'=>app()->getLocale(),'slug'=>$logo->slug])}}" class="btn btn-primary">{{__('lang.view_details')}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <h2 id="error" class="text-danger text-center">
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
          $(document).ready(function(){
          $('#search').on('keyup', function(){         
            var text = $('#search').val();  
            var obj={
                search:text
            } 
            console.log( obj )
              $.ajax({
                  type:"GET", 
                  url: 'search',
                  data:obj,
                 success: function(response) {
                
                    console.log( response)

                    var str=``;
                    if (response && response.length > 0) { // Check if response is not empty
                    $.each(response, function (key, logo) {
                    //    console.log(logo.name);
                        str+=`
                            <div class="card ml-5  mt-5" style="width:200px">
                                <a href=" {{route('add_to_favorite',['locale'=>app()->getLocale()] )}},'id'=${logo.id}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px"><path fill="#c12f7d" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg></a>
                                <img src="/image/${logo.logo_image} " style="height:250px" alt="Card image">
                                <a href="{{route('logo_details',['locale'=>app()->getLocale()])}},'slug'=${logo.slug}" class="btn btn-primary">{{__('lang.view_details')}}</a>
                            </div>
                            `
                        });
                        $('.logs_main_div').html(str)
                    } else {
                    $('#error').html('Result Not found')
                     } 
                }
              });
          });
      });
</script>
@endsection