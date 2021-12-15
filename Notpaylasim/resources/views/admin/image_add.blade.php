@extends('layouts.admin')
@section('title','Resim Galeri Ekleme')
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
                            <h2>{{$data->title}} <small>,

                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                            <form action="{{route('admin_image_store', ['note_id'=>$data->id])}}" method="POST" id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left">
                                    @csrf



                                <!-- Ck Editör Başlangıç -->

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ders Adı <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="title"   placeholder="Not İçerik giriniz" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>


                                <!-- Ck Editör Bitiş -->



                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Not Resim <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="file" id="first-name" name="image"  placeholder="Resim Yükleyiniz"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Kaydet</button>
                                    </div>
                                </div>

                            </form>



                        </div>
                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th rowspan="1" colspan="1">Id</th>
                                <th rowspan="1" colspan="1">Title</th>
                                <th rowspan="1" colspan="1">Image</th>
                                <th rowspan="1" colspan="1">Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <p></p>

                                <tr class="gradeU odd">
                                    <td class="">{{$rs -> id}}</td>
                                    <td class="sorting_1">{{$rs -> title}}</td>
                                    <td>
                                        @if ($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="70">
                                        @endif
                                    </td>
                                    <td class="center "><a href="{{route('admin_image_delete',['id' => $rs->id,'note_id'=>$data->id])}}" onclick="return confirm('Are you sure?')"><img src="{{asset('assets')}}/admin/assets/images/deleteicon.png" height="25"></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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
