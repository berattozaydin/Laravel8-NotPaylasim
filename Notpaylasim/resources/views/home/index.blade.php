@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@extends('layouts.home')
@section('title',$setting->title)
@section('description') {{$setting->description}} @endsection
@section('keywords',$setting->keywords)
@section('content')
    <div class="banner padding-tb-20px">
        <div class="container">

            <div class="padding-tb-120px z-index-2 position-relative">
                <div class="text-center">
                    <h1 class="text-white pull-l icon-large font-weight-500 margin-bottom-40px">Not Paylaşım Sitesi</h1>
                    <h3 class="text-white icon-large font-weight-100">Notlar</h3>
                </div>
                <div class="margin-top-45px">
                    <div class="row justify-content-center margin-tb-60px">
                        <div class="col-lg-8">
                            <div class="listing-search">
                                <form class="row no-gutters">
                                    <div class="col-md-4">
                                        <div class="keywords">
                                            <input class="listing-form first" type="text" placeholder="Keywords..." value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <a class="listing-bottom background-second-color box-shadow" href="#">Search Now</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //container  -->
        <video class="background-grey-3" autoplay loop id="video-background" muted plays-inline><source src="#video-url" type="video/mp4"></video>

    </div>


    <div class="background-light-grey">
        <div class="container padding-top-100px">
            <div class="row">
                @foreach($slider as $rs)
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                    <a href="{{route('note',['id' => $rs->id])}}" class="d-block box-shadow background-main-color text-white hvr-float">
                       <div class="thum"><img style="width: 450px;height: 250px" src="{{Storage::url($rs->image)}}" alt=""></div>
                        <h4 class="text-center padding-15px">{{$rs->title}}</h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
