@php
$parentCategories = \App\Http\Controllers\HomeController::categorylist();
$setting = \App\Http\Controllers\HomeController::getsetting()
@endphp


        <header class="background-main-color">
            <div class="container">
            <div class="header-output">
                <div class="header-in">

                    <div class="row">


                        <div class="col-lg-3 col-md-12 padding-left-30px">
                            <a id="logo" href="{{route('home')}}" class="d-inline-block margin-tb-10px"><img src="{{asset('assets')}}/img/notpaylasim.png" alt=""></a>

                        </div>
                        <div class="col-lg-7 col-md-12 position-inherit">
                            <ul id="menu-main" class="white-link dropdown-dark text-lg-center nav-menu link-padding-tb-24px">
                                <li class="has-dropdown"><a href="{{route('home')}}">Anasayfa</a> </li>
                                <li class="has-dropdown"><a href="#">Kategoriler</a>
                                    <ul class="sub-menu text-left">
                                        @foreach($parentCategories as $rs)
                                            <li class="dropdown side-dropdown">
                                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{$rs->title}}<i class="fa fa-angle-right"></i> </a>
                                                {{--<div class="custom-menu">
                                                    <div class="row">--}}

                                                @if(count($rs->children))
                                                    @include('home.categorytree',['children'=>$rs->children])
                                                @endif

                                                {{--</div>
                                            </div>--}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>



                                <li><a href="{{route('contactus')}}">Bize Ulaşın</a> </li>
                                <li><a href="{{route('aboutus')}}">Hakkımızda</a> </li>
                                <li><a href="{{route('references')}}">Referanslar</a> </li>
                                <li><a href="{{route('faq')}}">SSS</a> </li>
                                @guest
                                <a href="{{route('register')}}" class="text-white ba-1 box-shadow float-right padding-lr-23px padding-tb-23px text-extra-large"><i class="fa fa-user"></i>Kayıt Ol</a>
                                @endguest
                            </ul>
                        </div>
                        @auth

                        <div class="flex p-1 ba-1  d-lg-block">
                            <div class="mt-1 d-block">
                            <hr class=" d-block d-sm-none mt-1.5">
                            <a href="{{route('myprofile')}}" class="text-white box-shadow text-extra-large"><i class="far fa-user"></i>{{Auth::user()->name}}</a>
                            <ul class="list-unstyled">

                                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Çıkış Yap</a></li>


                            </ul>
                            </div>
                        </div>
                        @endauth
                        @guest
                            <div class="col-lg-2 col-md-12 d-none d-lg-block">
                                <hr class="margin-bottom-0px d-block d-sm-none">
                                <a href="{{route('login')}}" class="text-white ba-1 box-shadow float-right padding-lr-23px padding-tb-23px text-extra-large"><i class="far fa-user"></i>Giriş Yap</a>
                            </div>

                        @endguest

                    </div>

                </div>
            </div>
            </div>
        </header>
        <!-- // Header  -->




    <!-- //container  -->

