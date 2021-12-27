@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('title','Sıkça Sorulan Sorular')

@section('content')

    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container">
            <ol class="breadcrumb opacity-5">

            </ol>
            <h1 class="font-weight-300">Sıkça Sorulan Sorular</h1>
        </div>
    </div>
    <div class="margin-tb-30px">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
@foreach($datalist as $rs)
                    <div class="margin-bottom-30px">
                        <div class="padding-30px padding-bottom-30px background-white border-radius-10">
                            <ul class="commentlist padding-0px margin-0px list-unstyled text-grey-3">
                                <li class="border-bottom-1 border-grey-1 margin-bottom-20px">
                                    <div class="margin-left-85px">
                                        <span class="text-extra-small">Oluşturma Tarihi :  <a href="#" class="text-main-color">{{$rs->created_at}}</a></span>
                                        <p class="margin-top-15px text-grey-2">Soru : {{$rs->question}} </p>
                                        <p>Cevap :  {!!$rs->answer!!} </p>
                                        <p>Cevap Verilme Tarihi : {{$rs->updated_at}}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endforeach

                </div>




            </div>

        </div>
    </div>


@endsection
