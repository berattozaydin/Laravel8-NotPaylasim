@extends('layouts.admin')
@section('title','Faq Listesi')
@section('content')
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Faq Listeleme <small>,




                                </small></h2>

                            <div class="clearfix"></div>

                            <div align="right">
                                <a href="{{route('admin_faq_add')}}"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

                            </div>
                        </div>
                        <div class="x_content">


                            <!-- Div İçerik Başlangıç -->

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Position</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Durum</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($datalist as $rs)


                                <tr>
                                    <td>{{$rs ->id}}</td>
                                    <td>{{$rs ->position}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>
                                        {!!$rs->answer!!}
                                    </td>
                                    <td>{{$rs->status}}</td>

                                    <td><center><a href="{{route('admin_faq_edit',['id'=>$rs->id])}}"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                    <td><a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure')"><button class="btn btn-primary btn-xs">Sil</button></a></td>
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
