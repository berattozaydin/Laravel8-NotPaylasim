@extends('layouts.admin')
@section('title','Kategori Listesi')
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
                            <h2>Menü Listeleme <small>,




                                </small></h2>

                            <div class="clearfix"></div>

                            <div align="right">
                                <a href="menu-ekle.php"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

                            </div>
                        </div>
                        <div class="x_content">


                            <!-- Div İçerik Başlangıç -->

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Kategori Id</th>
                                    <th>Kategori Parent Id</th>
                                    <th>Kategori Ad</th>
                                    <th>Kategori İçerik</th>
                                    <th>Kategori Tanım</th>
                                    <th>Kategori Resim</th>
                                    <th>Kategori Slug</th>
                                    <th>Kategori Durum</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($datalist as $rs)


                                <tr>
                                    <td width="20">{{$rs->id}} </td>
                                    <td>{{$rs->parent_id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->slug}}</td>
                                    <td>{{$rs->status}}</td>

                                    <td>
                                        <center>

                                            <button class="btn btn-success btn-xs">Aktif</button>




                                            <button class="btn btn-danger btn-xs">Pasif</button>


                                        </center>


                                    </td>


                                    <td><center><a href=""><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                    <td><center><a href=""><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
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
