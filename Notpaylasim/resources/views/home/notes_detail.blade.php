@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title',$data->title)
@section('description') {{$data->description}}@endsection
@section('keywords',$data->keywords)
@section('content')

    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-left">
            <ol class="breadcrumb opacity-5">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category,$data->category->title)}}</li>
            </ol>
            <h1 class="font-weight-300">{{$data->title}}</h1>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="margin-bottom-40px card border-0 box-shadow">
                    @foreach($datalist as $rs)
                    <div class="card-img-top"><a href=""><img src="{{Storage::url($rs->image)}}" style="height: 250px "alt=""></a></div>
                        @endforeach
                    <div class="padding-lr-30px padding-tb-20px">
                        <h5 class="margin-bottom-20px margin-top-10px"><a class="text-dark" href="#">{{$data->title}}</a></h5>

                            <hr>
                            <h3>Tanımlamalar</h3>
                            <ul>

                                <li><strong>{{$data->description}}</strong> </li>

                            </ul>

                        <hr>
                        <h3>Var Olan Dosyalar</h3>
                        <ul>
                            <li><a href="{{Storage::url($data->file)}}" target="_blank"><img src="{{asset('assets')}}/admin/images/pdf.png" height="50">Tıklayınız</a></li>

                        </ul>
                        <hr>
                        <div class="row no-gutters">

                        </div>
                    </div>

                </div>


                <div class="margin-bottom-40px box-shadow">
                    <div class="padding-30px background-white">
                        <h3><i class="far fa-star margin-right-10px text-main-color"></i> Yorumlar</h3>
                        <hr>
@foreach($reviews as $rs)
                        <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                            <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                <img src="{{Storage::url($rs->profile_photo_path)}}" class="float-left margin-right-20px border-radius-60 margin-bottom-20px" alt="">
                                <div class="margin-left-85px">
                                    <a class="d-inline-block text-dark text-medium margin-right-20px" href="#">{{$rs->user->name}} </a>

                                    <p class="margin-top-15px text-grey-2">{{$rs->review}}</p>
                                </div>
                            </li>
                        </ul>
    @endforeach

                    </div>
                </div>

@livewire('review',['id'=>$data->id])

            </div>
            @livewireScripts


        </div>
    </div>

@endsection
