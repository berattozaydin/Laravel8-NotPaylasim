@extends('layouts.home')
@section('title','Not Paylasim')
@section('content')
    @php
        $setting = \App\Http\Controllers\HomeController::getsetting()
    @endphp
    <!-- Map -->
    <div class="map-distributors-in">
        <div id="map-distributors">

            <script>
                $(function() {
                    $("#map-distributors").goMap({
                        zoom: 6,
                        maptype: 'ROADMAP',
                        markers: [

                            {
                                address: '39.605247,-104.615413',
                                icon: 'assets/img/icon_marker_1.png'
                            },

                        ],
                        hideByClick: true
                    });
                    $("#default").click(function() {
                        $("#dump").html($.dump($.goMap.getMarkers()));
                    });
                    $("#clearall").click(function() {
                        $.goMap.clearMarkers();
                    });
                    $("#json").click(function() {
                        $("#dump").html($.goMap.getMarkers("json"));
                    });
                    $("#data").click(function() {
                        $("#dump").html($.goMap.getMarkers("data"));
                    });

                    $('.gm-style-iw').parent().css('width', 'auto');


                });

            </script>

        </div>
    </div>
    <!-- //  Map -->


    <!-- Page Output -->
    <section class="padding-tb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    @include('home.message')
                    <form action="{{route('sendmessage')}}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputName">Ad Soyad</label>
                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Ad Soyad">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Adres</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Adres">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mesajınız</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3"></textarea>
                            <script>
                                CKEDITOR.replace( 'message' );
                            </script>
                        </div>
                       <button type="submit" class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase rounded-0 padding-15px">Gönder</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6">
                   {!! $setting->contact !!}
                </div>
            </div>
        </div>
    </section>
    <!-- // Page Output -->


@endsection
