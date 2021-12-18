@extends('layouts.home')
@section('title','title')
@section('description')  @endsection
@section('keywords','keywords')
@section('content')
   <!-- <div id="page-title" class="padding-tb-30px gradient-white text-center">
        <div class="container">
            <ol class="breadcrumb opacity-5">
                <li><a href="#">Anasayfa</a></li>

            </ol>
            <h1 class="font-weight-300">Login Page</h1>
        </div>
    </div>
    <br>-->
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>
    <div class="container margin-bottom-80px">
        <div class="widget widget_categories">
            <div class="margin-bottom-30px">
                <h4 class="padding-lr-30px padding-tb-20px background-white box-shadow border-radius-10"><i class="far fa-folder-open margin-right-10px text-main-color"></i> Kullanıcı Paneli</h4>
                <div class="padding-30px padding-bottom-30px background-white border-radius-10">
                    <ul>
                        <li><a href="{{route('myprofile')}}">Profil</a></li>
                        <li><a href="#">Paylaştıklarım</a></li>
                        <li><a href="#">Beğendiğim Notlar</a></li>
                        <li><a href="{{route('logout')}}">Çıkış</a></li>

                    </ul>
                </div>
            </div>
        </div>
        <!--======= log_in_page =======-->
        <div id="log-in" class="row">

                @include('profile.show')

           <!-- <div class="form-output">
                <form>
                    <div class="form-group label-floating">
                        <label class="control-label">Email Adresi</label>
                        <input class="form-control" placeholder="" type="email" value="">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Şifre</label>
                        <input class="form-control" placeholder="" type="password" value="">
                    </div>

                    <div class="remember">
                        <div class="checkbox">
                            <label>
                                <input name="optionsCheckboxes" type="checkbox">
                                Remember Me
                            </label>
                        </div>
                        <a href="#" class="forgot">Forgot my Password</a>
                    </div>

                    <a href="dashboard-home.html" class="btn btn-md btn-primary full-width">Login</a>

                    <div class="or"></div>

                    <a href="#" class="btn btn-md bg-facebook full-width btn-icon-left"><i class="fab fa-facebook margin-right-8px" aria-hidden="true"></i> Login with Facebook</a>

                    <a href="#" class="btn btn-md bg-twitter full-width btn-icon-left"><i class="fab fa-twitter margin-right-8px" aria-hidden="true"></i> Login with Twitter</a>


                    <p>Don't you have an account? <a href="page-sign-up.html">Register Now!</a> </p>
                </form>

            </div>--->

        </div>
        <!--======= // log_in_page =======-->




    </div>
@endsection
