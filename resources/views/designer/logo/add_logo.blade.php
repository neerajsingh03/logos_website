@extends('designer-layout.master')
@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">{{__('lang.add_logo')}}</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    @if (session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="nk-block">
                        <form action="{{route('add_logo_process',['locale'=>app()->getLocale()])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="row gy-4">
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="first-name">{{__('lang.logo_name')}}</label>
                                                <input type="text" class="form-control" name="name" placeholder="{{__('lang.logo_name')}}" >
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label">{{__('lang.category')}}</label>
                                                <div class="form-control-wrap">
                                                    <select class="form-select js-select2" data-placeholder="{{__('lang.select_multiple_options')}}" name="category">
                                                        <option value="">- {{__('lang.category')}}-</option>
                                                        @if ($category !== null)
                                                            @foreach ($category as $cat)
                                                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">{{__('lang.image')}}</label>
                                                <input type="file" class="form-control" placeholder="" name="logo_image">
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="phone-no">{{__('lang.price')}}</label>
                                                <input type="number" name="price" class="form-control" placeholder="{{__('lang.enter_price')}}">
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="email">{{__('lang.stock')}}</label>
                                                <input type="number" name="stock" class="form-control" placeholder="{{__('lang.stock_enter')}}">
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label" for="address">{{__('lang.about_product')}}</label>
                                                <textarea name="description" id="description" class="form-control" placeholder="{{__('lang.about_product')}}......"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">{{__('lang.add_logo')}}</button>
                                            </div>
                                        </div><!--col-->
                                    </div><!--row-->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </form>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection