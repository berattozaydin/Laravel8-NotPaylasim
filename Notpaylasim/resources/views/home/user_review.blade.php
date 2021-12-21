@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('content')

    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-left">
            <ol class="breadcrumb opacity-5">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active"></li>
            </ol>
            <h1 class="font-weight-300"></h1>
        </div>
    </div>
    <div class="container margin-bottom-80px">
@include('home.usermenu')
    </div>
    <div class="margin-tb-30px">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    @include('home.message')
@foreach($datalist as $rs)
                    <div class="blog-entry background-white border-1 border-grey-1 margin-bottom-35px box-shadow border-radius-10 overflow-hidden">
                        <div class="row no-gutters">
                            <div class="img-in col-lg-5"><a href="{{route('note',['id'=>$rs->note->id,'slug'=>$rs->note->slug])}}"><img src="{{Storage::url($rs->image)}}" alt="">{{$rs->note->title}}</a></div>
                            <div class="col-lg-7">
                                <div class="padding-lr-25px padding-tb-50px">
                                    <a class="d-block h4  text-capitalize margin-bottom-8px" href="#">{{$rs->review}} </a>
                                    <div class="meta">
                                        <span class="margin-right-20px text-extra-small">By : <a href="#" class="text-main-color">{{$rs->user->name}}</a></span>
                                        <span class="margin-right-20px text-extra-small">Date :  <a href="#" class="text-main-color">{{$rs->created_at}}</a></span>
                                        <span class="text-extra-small">{{$rs->note->title}}  <a href="#" class="text-main-color">Arts</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Silmek İstediğine Eminmisin')">Yorumu Sil</a> </div>
                    </div>
                        @endforeach
                </div>

            </div>

        </div>
    </div>
@endsection
