@extends('layouts.admin')
@section('title','Kullanıcı Show Sayfası')
@section('description')

@endsection
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Kullanıcı Show Düzenleme <small>,

                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <div class="box-body">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <tr>
                                        <th rowspan="1" colspan="1">Fotoğrafı</th>
                                        <td>
                                            @if($data->profile_photo_path)
                                                <img src="{{Storage::url($data->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                            @endif

                                        </td>
                                    </tr>

                                    <tr>
                                        <th rowspan="1" colspan="1">Id</th>
                                        <td class="">{{$data ->id}}</td>
                                    </tr><tr>
                                        <th rowspan="1" colspan="1">İsim</th>
                                        <td class="sorting_1">{{$data -> name}}</td>
                                    </tr><tr>
                                        <th rowspan="1" colspan="1">Email</th>
                                        <td class="sorting_1">{{$data -> email}}</td>
                                    </tr><tr>
                                        <th rowspan="1" colspan="1">Telefon</th>
                                        <td class="sorting_1">{{$data -> phone}}</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Tarih</th>
                                        <td class="sorting_1">{{$data -> created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Roles</th>
                                        <td class="sorting_1">@foreach($data -> roles as $row)
                                                {{$row->name}}
                                            @endforeach
                                            <a href="{{route('admin_user_role_delete', ['userid' => $data->id,'roleid'=>$row->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                                <img src="{{asset('assets')}}/admin/images/deleteicon.png" height="30"></a>

                                        </td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rol EKLE</th>
                                        <td>
                                            <form role="form" action="{{route('admin_user_role_add', ['id' => $data->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <select name="roleid">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-success">Rol EKLE</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <td></td><td>

                                    </td>

                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>



            <hr>
            <hr>
            <hr>



        </div>
    </div>
    <!-- /page content -->

@endsection
