@extends('layouts.home')
@section('title',$setting->title)
@section('description') {{$setting->description}} @endsection
@section('keywords',$setting->keywords)
@section('content')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting()
    @endphp
<div id="page-title" class="padding-tb-30px gradient-white">
    <div class="container">
        <ol class="breadcrumb opacity-5">
        </ol>
        <h1 class="font-weight-300">References</h1>
    </div>
</div>


    <div class="padding-tb-100px">
        <div class="container">
            <div class="row  text-dark">

                {!! $setting->references !!}
            </div>
        </div>
    </div>
@endsection
