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
                                    <th>Review Id</th>
                                    <th>Adı</th>
                                    <th>Not Adı</th>
                                    <th>Review</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($datalist as $rs)


                                <tr>
                                    <td class="">{{$rs -> id}}</td>
                                    <td>{{$rs->user->name}}</td>
                                    <td><a href="{{route('note',['id'=>$rs->note->id,'slug'=>$rs->note->slug])}}">{{$rs->note->title}}</a></td>
                                    <td>{{$rs ->subject}}</td>
                                    <td>{{$rs->review}}</td>
                                    <td>{{$rs->rate}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>{{$rs->created_at}}</td>
                                    <td><center><a target="_blank" href="{{route('admin_review_show',['id'=>$rs->id])}}" onclick="return !window.open(this.href)" ></a></center></td>
                                    <td><a href="{{route('admin_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure')"><button class="btn btn-primary btn-xs">Sil</button></a></td>
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
