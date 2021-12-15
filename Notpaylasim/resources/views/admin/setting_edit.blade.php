@extends('layouts.admin')
@section('title','Not Düzenleme Sayfası')
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
                            <h2>Genel Ayar Düzenleme <small>,

                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                            <form action="{{route('admin_setting_update')}}" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                                    @csrf
                                <h2>Genel Ayar</h2>
                                <input type="hidden" id="first-name" name="id" value="{{$data->id}}" class="form-control col-md-7 col-xs-12">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Başlık <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="title" value="{{$data->title}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="keywords"  value="{{$data->keywords}}"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanım <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="description" value="{{$data->description}}"   class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Company<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="company" value="{{$data->company}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adresi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="adress" value="{{$data->adress}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="phone" value="{{$data->phone}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fax Numarası<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="fax" value="{{$data->fax}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email Adresi<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="email" value="{{$data->email}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                               <h2>Genel Ayar Durum</h2>
                                <div class="form-group">
                                    <label>Status</label>
                                   <select style="width: 120px; " class="form-control" name="status">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <h2>Sosyal Medya Ayarı</h2>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" name="facebook" value="{{$data->facebook}}"  class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="detail" name="twitter" value="{{$data->twitter}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <h2>Email Ayar Durumu</h2>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Smtp Sunucusu
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Smtp Email <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="detail" name="smtpemail" value="{{$data->smtpemail}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Smtp Şifre <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="password" id="detail" name="smtppassword" value="{{$data->smtppassword}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Smtp Port <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="detail" name="smtpport" value="{{$data->smtpport}}" class="form-control col-md-7 col-xs-12">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="aboutus" id="" cols="30" rows="10">{!! $data->aboutus !!}</textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İletişim <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="contact" id="" cols="30" rows="10">{!! $data->contact !!}</textarea>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Referanslar <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea name="references" id="" cols="30" rows="10">{!! $data->references !!}</textarea>

                                    </div>
                                </div>
                                <script>
                                    CKEDITOR.replace( 'aboutus' );
                                    CKEDITOR.replace( 'contact' );
                                    CKEDITOR.replace( 'references' );
                                </script>


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
