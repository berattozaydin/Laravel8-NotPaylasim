@extends('layouts.admin')
@section('title','FAQ Sayfası')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">

            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>FAQ Düzenleme <small>,

                                </small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <!-- / => en kök dizine çık ... ../ bir üst dizine çık -->
                            <form action="{{route('admin_faq_update',['id'=>$data->id])}}" method="POST" id="demo-form2" enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">
                                @csrf
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Faq Position <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="number" id="first-name" name="position" value="{{$data->position}}" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Question <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="first-name" value="{{$data->question}}" name="question" class="form-control col-md-7 col-xs-12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Answer<span class="required">*</span>
                                    </label>
                                    <textarea id="detail" name="answer" value="" required>{{$data->answer}}</textarea>
                                    <script>
                                        CKEDITOR.replace( 'answer' );
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <select id="heard" class="form-control" name="status" required>
                                            <option value="  {{$data->status}}" > Var Olan Değer - {{$data->status}}</option>
                                            <option value="1" >Aktif</option>
                                            <option value="0" >Pasif</option>
                                        </select>
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
