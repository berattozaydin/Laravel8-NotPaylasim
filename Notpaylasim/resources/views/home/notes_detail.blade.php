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
                    <div class="background-light-grey border-top-1 border-grey padding-lr-30px padding-tb-20px">
                        <a href="#" class="d-inline-block text-grey-3 h6 margin-bottom-0px margin-right-15px"><img src="" class="height-30px border-radius-30 margin-right-15px" alt=""> Salim Aldosery</a>
                    </div>
                </div>


                <div class="margin-bottom-40px box-shadow">
                    <div class="padding-30px background-white">
                        <h3><i class="far fa-star margin-right-10px text-main-color"></i> Yorumlar</h3>
                        <hr>

                        <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                            <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                <img src="http://placehold.it/60x60" class="float-left margin-right-20px border-radius-60 margin-bottom-20px" alt="">
                                <div class="margin-left-85px">
                                    <a class="d-inline-block text-dark text-medium margin-right-20px" href="#">Bakhita alrawi </a>
                                    <span class="text-extra-small">Date :  <a href="#" class="text-main-color">July 15, 2016</a></span>
                                    <div class="rating">
                                        <ul>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <p class="margin-top-15px text-grey-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="margin-bottom-80px box-shadow">
                    <div class="padding-30px background-white">
                        <h3><i class="far fa-star margin-right-10px text-main-color"></i> Add Review </h3>
                        <hr>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputName">Full Name</label>
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Comment :</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Comment"></textarea>
                            </div>
                            <a href="#" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase border-radius-10 padding-10px">Add Now !</a>
                        </form>
                    </div>
                </div>



            </div>

        </div>
    </div>

@endsection
