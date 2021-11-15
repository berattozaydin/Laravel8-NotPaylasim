@extends('layouts.home')
@section('content')
    <div class="container margin-bottom-100px">
        <!--======= log_in_page =======-->
        <div id="log-in" class="site-form log-in-form box-shadow border-radius-10">

            <div class="form-output">
                <form action="{{route('home_logincheck')}}" method="post">
                    @csrf
                    <div class="form-group label-floating">
                        <label class="control-label">Your Email</label>
                        <input class="form-control" placeholder="" type="email" name="email">
                    </div>
                    <div class="form-group label-floating">
                        <label class="control-label">Your Password</label>
                        <input class="form-control" placeholder="" type="password" name="password">
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
                    <button class="" type="submit" name="admingiris">
                    </button>


                    <div class="or"></div>

                    <a href="#" class="btn btn-md bg-facebook full-width btn-icon-left"><i class="fab fa-facebook margin-right-8px" aria-hidden="true"></i> Login with Facebook</a>

                    <a href="#" class="btn btn-md bg-twitter full-width btn-icon-left"><i class="fab fa-twitter margin-right-8px" aria-hidden="true"></i> Login with Twitter</a>


                    <p>Don't you have an account? <a href="page-sign-up.html">Register Now!</a> </p>
                </form>
            </div>
        </div>
        <!--======= // log_in_page =======-->

    </div>

    @endsection
