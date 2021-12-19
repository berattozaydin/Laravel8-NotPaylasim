@extends('layouts.admin')
@section('title','Mesaj Listesi')
@section('description')

@endsection
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Mesaj Listeleme <small>,





                                </small></h2>

                            <div class="clearfix"></div>
                        @include('home.message')

                            <!--<div align="right">
                                <a href=""><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

                            </div>-->
                        </div>

                        <div class="x_content">




                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Not Id</th>
                                    <th>Mesajı Gönderenin Adı</th>
                                    <th>Mesajı Gönderenin Emaili</th>
                                    <th>Mesajı Gönderenin Adresi</th>
                                    <th>Mesajı</th>
                                    <th>Admin Notu</th>
                                    <th>Mesaj Durumu</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($datalist as $rs)


                                <tr>
                                    <td class="">{{$rs -> id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs ->email}}</td>
                                    <td>{{$rs ->address}}</td>
                                    <td>{{$rs->message}}</td>
                                    <td>{{$rs->note}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><center><a target="_blank" href="{{route('admin_message_edit',['id'=>$rs->id])}}" ><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                    <td><a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure')"><button class="btn btn-primary btn-xs">Sil</button></a></td>
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
