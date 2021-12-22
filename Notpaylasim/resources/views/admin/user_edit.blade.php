@extends('layouts.admin')
@section('title','Kullanıcı Düzenleme Sayfası')
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
                            <h2>Kullanıcı Düzenleme <small>,

                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                            <form role="form" action="{{route('admin_user_update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>İsim</label>
                                        <input type="text" name="name" value="{{$data->name}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Telefon</label>
                                        <input type="text" name="phone"  value="{{$data->phone}}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Fotoğraf</label>
                                        <input type="file" name="image" class="form-control">

                                        @if ($data->profil_photo_path)
                                            <img src="{{Storage::url($data->profil_photo_path)}}" height="200" style="border-radius: 10px" alt="">
                                        @endif
                                    </div>

                                </div><!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Güncelle</button>
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
