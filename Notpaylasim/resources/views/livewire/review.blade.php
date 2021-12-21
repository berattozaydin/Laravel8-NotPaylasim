@if (session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif
<div class="margin-bottom-80px box-shadow">
    <div class="padding-30px background-white">
        <h3><i class="far fa-star margin-right-10px text-main-color"></i> Add Review </h3>
        <hr>
        <form wire:submit.prevent="store">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputName">Subject</label>
                    <input type="text" wire:model="subject" class="form-control" id="inputName" placeholder="Subject" required="">
                    @error('subject')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Comment</label>
                    <textarea  wire:model="review" class="form-control" placeholder="Your comment..."  cols="45"
                               rows="8" required></textarea>
                    @error('review')<span class="text-danger">{{$message}}</span>@enderror
                </div>
            </div>

            @auth
            <button type="submit"><a class="btn-sm btn-lg btn-block background-main-color text-white text-center font-weight-bold text-uppercase border-radius-10 padding-10px">Add Now !</a></button>
            @else
            <a href="/login" class="btn btn-a">Login Ol</a>
            @endauth
        </form>
    </div>
</div>
