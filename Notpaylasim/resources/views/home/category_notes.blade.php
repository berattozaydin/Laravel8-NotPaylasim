@extends('layouts.home')
@section('title',$data->title)
@section('content')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting()
    @endphp
    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-left">
            <h1 class="font-weight-300">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($data,$data->title)}}</h1>
        </div>
    </div>
    <div class="container margin-bottom-100px">

        <div class="row">
            @foreach($datalist as $rs)
            <!-- item -->
            <div class="col-lg-6 margin-bottom-30px">
                <div class="background-white thum-hover box-shadow hvr-float full-width">
                    <a class="float-md-left margin-right-30px thum-xs">
                        <a href="{{route('note',['id' => $rs->id])}}"><img class="width-250px" src="{{Storage::url($rs->image)}}" ></a></a>
                    </div>
                    <div class="padding-25px">

                        <h3><a href="{{route('note',['id' => $rs->id])}}" class="d-block text-dark text-capitalize text-medium margin-tb-15px">{{$rs->title}}</a></h3>
                        <hr>
                        <div class="row no-gutters">
                            <div class="col-4 text-left"><a href="{{route('note',['id' => $rs->id])}}" class="text-red"><i class="far fa-heart"></i>{{$rs->keywords}}</a></div>
                            <div class="col-8 text-right"><a href="#" class="text-grey-2"><i class="fas fa-users"></i></a></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- // item -->
                @endforeach
        </div>



    </div>

@endsection
