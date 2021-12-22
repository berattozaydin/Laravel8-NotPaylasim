@extends('layouts.admin')
@section('title')
    @section('content')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Kullanıcı Listeleme <small>





                                    </small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">


                                <!-- Div İçerik Başlangıç -->

                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th rowspan="1" colspan="1">Id</th>
                                        <th rowspan="1" colspan="1">Fotoğrafı</th>
                                        <th rowspan="1" colspan="1">İsim</th>
                                        <th rowspan="1" colspan="1">Email</th>
                                        <th rowspan="1" colspan="1">Telefon</th>
                                        <th rowspan="1" colspan="1">Rolleri</th>
                                        <th rowspan="1" colspan="1">Düzenle</th>
                                        <th rowspan="1" colspan="1">Sil</th>
                                    </tr>
                                    </thead>

                                    <tbody>



                                    @foreach($datalist as $rs)
                                    <tr>
                                        <td class="sorting_1">{{$rs -> id}}</td>
                                        <td>
                                            @if($rs->profile_photo_path)
                                                <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px" alt="">
                                            @endif
                                        </td>
                                        <td class="sorting_1">{{$rs ->name}}</td>
                                        <td class="sorting_1">{{$rs -> email}}</td>
                                        <td class=" ">{{$rs -> phone}}</td>
                                        <td>
                                            @foreach($rs->roles as $row)
                                                {{ $row-> name }},
                                            @endforeach
                                            <a href="{{route('admin_user_roles',['id' => $rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')"><img src="{{asset('assets')}}/admin/images/plus.png" height="20"></a>
                                        </td>
                                        <td class="center "><a href="{{route('admin_user_edit',['id' => $rs->id])}}"><button class="btn btn-primary btn-xs">Düzenle</button></a></td>
                                        <td class="center "><a href="{{route('admin_user_delete',['id' => $rs->id])}}" onclick="return confirm('Are you sure?')"><button class="btn btn-primary btn-xs">Sil</button></a></td>
                                    </tr>
                                    @endforeach





                                    </tbody>
                                </table>

                                <!-- Div İçerik Bitişi -->


                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <!-- /page content -->
    @endsection
