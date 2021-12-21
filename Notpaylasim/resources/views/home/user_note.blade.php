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
        <div class="card-header">
            <a class="btn btn-block btn-info" type="button" style="width:200px" href="{{route('user_note_add')}}">Add Note</a>
            @include('home.message')
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                    <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                        <thead>
                        <tr>
                            <th rowspan="1" colspan="1">Faculty-Department</th>
                            <th rowspan="1" colspan="1">Lesson</th>
                            <th rowspan="1" colspan="1">User</th>
                            <th rowspan="1" colspan="1">Status</th>
                            <th rowspan="1" colspan="1">Image</th>
                            <th rowspan="1" colspan="1">Image Gallery</th>
                            <th rowspan="1" colspan="1">File(pdf)</th>
                            <th rowspan="1" colspan="1">Edit</th>
                            <th rowspan="1" colspan="1">Delete</th></tr>
                        </thead>
                        <tbody>
                        @foreach($datalist as $rs)
                            <p></p>

                            <tr class="gradeU odd">
                                <td>
                                    {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                </td>
                                <td class="sorting_1">{{$rs ->title}}</td>
                                <td class="sorting_1">{{$rs -> user->name}}</td>
                                <td class=" ">{{$rs -> status}}</td>
                                <td>
                                    @if ($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30">
                                    @endif
                                </td>
                                <td><a href="{{route('user_image_add',['note_id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')"><img src="{{asset('assets')}}/admin/images/galleryicon.png" height="25"></a></td>
                                <td>
                                    @if ($rs->file)
                                        <a href="{{Storage::url($rs->file)}}" target="_blank"><img src="{{asset('assets')}}/admin/images/pdf.png" height="25"></a>
                                    @endif
                                </td>
                                <td class="center "><a href="{{route('user_note_edit',['id' => $rs->id])}}"><img src="{{asset('assets')}}/admin/images/editicon.png" height="25"></a></td>
                                <td class="center "><a href="{{route('user_note_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"><img src="{{asset('assets')}}/admin/images/deleteicon.png" height="25"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
