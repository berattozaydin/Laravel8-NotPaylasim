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
                            <h2>Not Listeleme <small>,




                                </small></h2>

                            <div class="clearfix"></div>

                            <div align="right">
                                <a href="{{route('admin_note_add')}}"><button class="btn btn-success btn-xs"> Yeni Ekle</button></a>

                            </div>
                        </div>
                        <div class="x_content">


                            <!-- Div İçerik Başlangıç -->

                            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Not Id</th>
                                    <th>Not Ad</th>
                                    <th>Not İçerik</th>
                                    <th>Not Kullanıcı</th>
                                    <th>Not Resim</th>
                                    <th>Not Resim Galerisi</th>
<th></th>
                                    <th>Not Dosyası(pdf)</th>
                                    <th>Not Durum</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($datalist as $rs)


                                <tr>
                                    <td class="">{{$rs -> id}}</td>
                                    <td>{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</td>

                                    <td>{{$rs ->title}}</td>
                                    <td><a href="{{route('admin_user_show',['id'=>$rs->user_id])}}">{{$rs->user->name ?? 'Admin'}}</a></td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="50">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin_image_add',['note_id' => $rs->id])}}"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100, height=700')">
                                            <img src="{{asset('assets')}}/Admin/images/galleryicon.png" height="25"></a></td>
                                    <td>
                                    <td>
                                        @if ($rs->file)
                                            <a href="{{Storage::url($rs->file)}}" target="_blank"><img src="{{asset('assets')}}/Admin/images/pdf.png" height="25"></a>
                                        @endif
                                    </td>



                                    <td>{{$rs->status}}</td>

                                    <td><center><a href="{{route('admin_note_edit',['id'=>$rs->id])}}"><button class="btn btn-primary btn-xs">Düzenle</button></a></center></td>
                                    <td><a href="{{route('admin_note_delete',['id'=>$rs->id])}}" onclick="return confirm('Delete ! Are You Sure')"><button class="btn btn-primary btn-xs">Sil</button></a></td>
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
