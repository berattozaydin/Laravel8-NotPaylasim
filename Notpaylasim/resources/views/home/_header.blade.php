@php
$parentCategories = \App\Http\Controllers\HomeController::categorylist()
@endphp
<div class="container">
        <header class="background-main-color">
            <div class="header-output">
                <div class="header-in">

                    <div class="row">


                        <div class="col-lg-3 col-md-12 padding-left-30px">
                            <a id="logo" href="index.html" class="d-inline-block margin-tb-10px"><img src="assets/img/logo-1.png" alt=""></a>
                            <a class="mobile-toggle padding-13px background-main-color" href="#"><i class="fas fa-bars"></i></a>
                        </div>
                        <div class="col-lg-7 col-md-12 position-inherit">
                            <ul id="menu-main" class="white-link dropdown-dark text-lg-center nav-menu link-padding-tb-24px">
                                <li class="has-dropdown"><a href="/">Home</a> </li>
                                <li class="has-dropdown"><a href="#">Kategoriler</a>
                                    <ul class="dropdown-menu" role="menu">
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

                                </li>

                                    </ul>
                                <li><a href="#">Conact Us</a> </li>

                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-12 d-none d-lg-block">
                            <hr class="margin-bottom-0px d-block d-sm-none">
                            <a href="page-login.html" class="text-white ba-1 box-shadow float-right padding-lr-23px padding-tb-23px text-extra-large"><i class="far fa-user"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- // Header  -->


    </div>

    <!-- //container  -->

