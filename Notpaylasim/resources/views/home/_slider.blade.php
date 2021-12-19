<div class="banner padding-tb-20px background-overlay">
@foreach($slider as $rs)
    <div class="padding-tb-200px z-index-2 position-relative">
        <h1 class="text-white pull-l icon-large font-weight-500 margin-bottom-40px"><img src="{{$rs->image}}"></h1>
    <h3 class="text-white icon-large font-weight-100">{{$rs->title}}</h3>
</div>
    @endforeach
</div>
    </div>
<div class="pull-top-85px">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 col-6 sm-mb-25px">
                <a href="#" class="d-block box-shadow background-main-color text-white hvr-float">
                    <div class="thum"><img src="http://placehold.it/450x250" alt=""></div>
                    <h4 class="text-center padding-15px">Fish</h4>
                </a>
            </div>
        </div>
    </div>
</div>
