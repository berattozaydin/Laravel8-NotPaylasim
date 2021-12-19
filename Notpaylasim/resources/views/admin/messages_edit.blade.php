@extends('layouts.admin')
@section('title','Mesaj Listesi')
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
                            <h2>Mesaj İçeriği <small>,
@include('home.message')
                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                            <form action="{{route('admin_message_update',['id'=>$data->id])}}" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf


                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Mesaj Id</th>
                                        <th>Mesajı Gönderenin Adı</th>
                                        <th>Mesajı Gönderenin Emaili</th>
                                        <th>Mesajı Gönderenin Adresi</th>
                                        <th>Mesajı</th>
                                        <th>Admin Notu</th>
                                    </tr>
                                    </thead>

                                    <tbody>



                                        <tr>
                                            <td class="">{{$data -> id}}</td>
                                            <td>{{$data->name}}</td>
                                            <td>{{$data ->email}}</td>
                                            <td>{{$data ->address}}</td>
                                            <td>{{$data->message}}</td>
                                            <td>
                                                <textarea name="note" id="adminnote" cols="30" rows="10">{{$data->note}}</textarea>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Kaydet</button>
                                    </div>
                                </div>

                            </form>



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
