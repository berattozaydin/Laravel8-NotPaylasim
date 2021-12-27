@extends('layouts.home')
@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
@section('content')

    <div id="page-title" class="padding-tb-30px gradient-white">
        <div class="container text-left">
            <ol class="breadcrumb opacity-5">
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
                <form role="form" action="{{route('user_note_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <p></p>
                            <p></p>
                            <p></p>
                            <label>Departmanı</label>
                            <select class="form-control" name="category_id">
                                @foreach($datalist as $rs)
                                    <option value="{{$rs -> id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ders</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Anahtar Kelimeler</label>
                            <input type="text" name="keywords" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tanımlama</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Fotoğraf</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>PDF Dosyası</label>
                            <input type="file" name="file" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Detay</label>
                            <textarea id="detail" name="detail"></textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>
                        {{--<div class="form-group">
                            <label>User</label>
                            <input type="number" name="user" class="form-control">
                        </div>--}}
                        <div class="form-group">
                            <label>Durum</label>
                            <select class="form-control" name="status">
                                <option selected="selected">Yeni</option>
                            </select>
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success btn-xs">Not Ekle</button>
                    </div>
                    <p></p>
                    <p></p>
                    <p></p>
                </form>
            </div>
        </div>
    </div>
@endsection
