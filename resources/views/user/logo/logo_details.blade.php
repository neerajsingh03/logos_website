@extends('front-layout.master')
@section('content')
<style>
.fa {
    font-size: 20px;
    color: #ddd; /* Default color */
}

.checked {
    color: rgb(243, 162, 11); /* Color for checked/starred icons */
}

.average-rating-text {
    font-size: 14px;
    color: #888; /* Text color for average rating */
    margin-left: 5px; /* Adjust spacing between stars and text */
}
</style>
<div class="fashion_section">
    <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                        <h1 class="fashion_taital">{{__('lang.logos')}}</h1>
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="row">
                        @csrf
                        @foreach($logo as $logo)
                            <div class="card ml-5  mt-5" style="width:350px">
                                <a href=" {{route('add_to_favorite',['locale'=>app()->getLocale(),'id'=>$logo->id])}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="15px"><path fill="#c12f7d" d="M47.6 300.4L228.3 469.1c7.5 7 17.4 10.9 27.7 10.9s20.2-3.9 27.7-10.9L464.4 300.4c30.4-28.3 47.6-68 47.6-109.5v-5.8c0-69.9-50.5-129.5-119.4-141C347 36.5 300.6 51.4 268 84L256 96 244 84c-32.6-32.6-79-47.5-124.6-39.9C50.5 55.6 0 115.2 0 185.1v5.8c0 41.5 17.2 81.2 47.6 109.5z"/></svg></a>
                                <img class="card-img-top" src="{{asset('/image/' .$logo->logo_image ) }}" style="height:250px" alt="Card image">
                                @if(isset($reviews) && $reviews->isNotEmpty())
                                @php
                                    $totalRating = 0;
                                    $countReviews = $reviews->count();
                                
                                    // Calculate total rating sum
                                    foreach ($reviews as $review) {
                                        $totalRating += $review->rate;
                                    }
                                    
                                    // Determine if there is only one review for this product
                                    $showExactRating = ($countReviews === 1);
                            
                                    // Calculate average rating rounded to the nearest whole number
                                    $averageRating = ($countReviews > 0) ? round($totalRating / $countReviews) : 0;
                                @endphp
                                @if($review->product_id === $logo->id)
                                    @if($showExactRating)
                                        {{-- Display exact rating if there is only one review --}}
                                        <div class="average-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span class="fa fa-star{{ $i <= $reviews->first()->rate ? ' checked' : '' }}"></span>
                                            @endfor
                                            <span class="average-rating-text">({{ $reviews->first()->rate }})</span>
                                        </div>
                                        @else
                                            {{-- Display average rating if there are multiple reviews --}}
                                            <div class="average-rating">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <span class="fa fa-star{{ $i <= $averageRating ? ' checked' : '' }}"></span>
                                                @endfor
                                                {{-- <span class="average-rating-text">({{ $averageRating }})</span> --}}
                                            </div>
                                    @endif
                                    
                                @endif
                            @endif
                            </div>
                            <div class="col-lg-6 p-5">
                                <div class="right-content">
                                    <h4>{{ $logo->name }}</h4>
                                    <div class="quote">
                                        <i class="fa fa-quote-left"></i>
                                        <p>{{ $logo->description }}</p>
                                    </div>
                                    <div class="total p-5">
                                        <h4>{{__('lang.price')}}: ₹<strong id="total_price">{{ $logo->price }}</strong></h4>
                                        <div class="main-border-button">
                                            @if(Auth()->user())
                                                <a href="{{ route('add_to_cart',['locale'=>app()->getLocale(),'id'=>$logo->id]) }}">{{__('lang.add_to_cart')}}</a>
                                            @else
                                            <a href="{{ url(app()->getLocale().'/login?redirect_url='.url(app()->getLocale().'/logo-details', ['slug' => $logo->slug])) }}">{{__('lang.add_to_cart')}}</a>

                                            @endif
                                           
                                        </div>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                            Add Review
                                          </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Review submit form  --}}
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Add Review</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        
                        <!-- Modal Body -->
                        <div class="modal-body">
                            <form action="{{ route('add_review') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $logo->id }}">
                                
                                <div class="form-group">
                                    <label for="rate">Rating:</label>
                                    <input type="number" id="rate" name="rate" class="form-control" placeholder="Enter rating (1-5)" min="1" max="5" required>
                                    <span class="text text-danger" id="rate-valid"></span>
                                </div>
                                
                                <div class="form-group">
                                    <label for="review">Review:</label>
                                    <textarea id="review" name="review" class="form-control" rows="3" placeholder="Write your review..." required></textarea>
                                    <span class="text text-danger" id="review-valid"></span>
                                </div>
                                
                                <button type="submit" class="btn btn-primary review_btn">Add Review</button>
                            </form>
                        </div>
                        
                        <!-- Modal Footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.review_btn').click(function(e){
            e.preventDefault();
            let rate = $('#rate').val();
            let review =  $('#review').val();
        });
    });
</script> --}}
@endsection