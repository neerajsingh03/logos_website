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
                                <h3 class="nk-block-title page-title">{{__('lang.category')}}</h3>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    @if (session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="nk-block">
                        <form action="{{route('add_categories',['locale'=>app()->getLocale()])}}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="card card-bordered">
                                <div class="card-inner">
                                    <div class="row gy-4">
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                               
                                            <div class="form-group">
                                                <label class="form-label" for="first-name">{{__('lang.category_name')}}</label>
                                                <input type="text" class="form-control" name="category_name" placeholder="{{__('lang.category_name')}}"><span class="text text-danger">@error('category_name'){{$message}} @enderror</span>
                                            </div>
                                        </div><!--col-->

                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label">{{__('lang.upload_photo')}}</label>
                                                <div class="form-control-wrap">
                                                    <div class="form-file">
                                                        <input type="file" multiple class="form-file-input" name="cat_image">
                                                        <label class="form-file-label" for="customFile">{{__('lang.choose_file')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--col-->
                                        <div class="col-md-6 col-lg-4 col-xxl-3">
                                            <div class="form-group">
                                                <label class="form-label">{{__('lang.parent_category')}}</label>
                                                <div class="form-control-wrap">
                                                    <select id="parent_category" name="parent_category" class="form-select js-select2" data-placeholder="{{__('lang.select_multiple_options')}}">
                                                        <option value="default_option">-{{__('lang.parent_category')}}-</option>
                                                        @if ($parent_category !== null)
                                                            @foreach ($parent_category as $cat)
                                                                <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                                                            @endforeach
                                                       @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">{{__('lang.add_category')}}</button>
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