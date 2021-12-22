@extends('layouts.admin')
@section('title','Kullanıcı Rol Düzenleme Sayfası')
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
                            <h2>Kullanıcı Rol Düzenleme <small>,

                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <div class="box-body">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">

                                    <tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Id</th>
                                        <td class="sorting_1">{{$data -> id}}</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">İsim</th>
                                        <td class="sorting_1">{{$data ->name}}</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Email</th>
                                        <td class="sorting_1">{{$data ->email}}</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Telefon</th>
                                        <td class="sorting_1">{{$data -> phone}}</td>
                                    </tr>
                                    <tr>
                                        <th rowspan="1" colspan="1">Rolü</th>
                                        <td>
                                            <table>
                                                @foreach($data->roles as $row)
                                                    <tr>
                                                        <td>{{$row->name}}</td>
                                                        <td><a href="{{route('admin_user_role_delete',['userid' => $data->id ,'roleid'=>$row->id])}}" onclick="return confirm('Are you sure?')"><img src="{{asset('assets')}}/admin/images/deleteicon.png" height="25"></a></td>
                                                    </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Add Role</th>
                                        <td>
                                            <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <select name="roleid">
                                                    @foreach($datalist as $rs)
                                                        <option value="{{$rs->id}}">{{$rs->name}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="submit" class="btn btn-primary">Rol EKLE</button>
                                            </form>
                                        </td>

                                    </tr>

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
