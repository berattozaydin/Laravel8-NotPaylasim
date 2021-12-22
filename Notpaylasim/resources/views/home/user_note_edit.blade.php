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
        <div class="card-body">
            <div class="box box-primary">
                <!-- form start -->
                <form role="form" action="{{route('user_note_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <p></p>
                            <p></p>
                            <p></p>
                            <label>Departmanı</label>
                            <select class="form-control" name="category_id">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs -> id}}" @if ($rs->id==$data->parent_id) selected="selected" @endif >
                                        {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ders</label>
                            <input type="text" name="title" value="{{$data->title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Anahtar Kelimeler</label>
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanımlama</label>
                            <input type="text" name="description"  value="{{$data->description}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fotoğrafı</label>
                            <input type="file" name="image" class="form-control">

                            @if ($data->image)
                                <img src="{{Storage::url($data->image)}}" height="30">
                            @endif

                        </div>
                        <div class="form-group">
                            <label>PDF Dosyası</label>
                            <input type="file" name="file" class="form-control">

                            @if($data->file)
                                <a href="{{Storage::url($rs->file)}}"><img src="{{asset('assets')}}/admin/assets/images/pdf.png" height="25"></a>
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug"  value="{{$data->slug}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Detay</label>
                            <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>
                        {{--<div class="form-group">
                            <label>User</label>
                            <input type="number" name="user" value="{{$data->user}}" class="form-control">
                        </div>--}}
                        <div class="form-group">
                            <label>Durum</label>
                            <select class="form-control" name="status">
                                <option selected="selected">{{$data->status}}</option>
                            </select>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-xs">Notu Güncelle</button>
                    </div>
                    <p></p>
                    <p></p>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection
