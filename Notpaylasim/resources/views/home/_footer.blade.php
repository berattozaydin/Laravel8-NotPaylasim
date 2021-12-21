@php
    $setting = \App\Http\Controllers\HomeController::getsetting()
@endphp
<footer class="padding-top-100px padding-bottom-70px background-dark">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 sm-mb-30px">
                <div class="logo margin-bottom-10px"><img src="assets/img/logo-1.png" alt=""></div>
                <ul class="list-inline text-left margin-tb-20px margin-lr-0px text-white">
                    <li class="list-inline-item"><a class="facebook" href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a class="twitter" href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a></li>

                </ul>
                <!-- // Social -->
            </div>

            <div class="col-lg-4  col-md-4 sm-mb-30px">
                <ul class="footer-menu-2 row margin-0px padding-0px list-unstyled">
                    <li class="col-6  padding-tb-5px"><a href="{{route('home')}}" class="text-grey-2">Home</a></li>
                    <li class="col-6  padding-tb-5px"><a href="{{route('contactus')}}" class="text-grey-2">Contact Us</a></li>
                    <li class="col-6  padding-tb-5px"><a href="{{route('faq')}}" class="text-grey-2">SSS</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>


<div class="padding-tb-10px background-main-color">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-white margin-tb-15px text-center text-lg-left">
                    Not Paylaşım Sitesi| @2021 All copy rights reserved
                </div>
            </div>

        </div>
    </div>
</div>

<script src="{{asset('assets')}}/js/jquery-3.2.1.min.js"></script>
<script src="{{asset('assets')}}/js/sticky-sidebar.js"></script>
<script src="{{asset('assets')}}/js/YouTubePopUp.jquery.js"></script>
<script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('assets')}}/js/imagesloaded.min.js"></script>
<script src="{{asset('assets')}}/js/masonry.min.js"></script>
<script src="{{asset('assets')}}/js/wow.min.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>
<script src="{{asset('assets')}}/js/popper.min.js"></script>
<script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
