    <div class="col-md-4">
        <div class="keywords">

            <input wire:model="search" name="search" list="mylist" class="listing-form first" type="text" placeholder="Keywords...">
            @if(!empty($query))
                <datalist id="mylist">
                    @foreach($datalist as $rs)
                        <option value="{{$rs->title}}">{{$rs->category->title}}</option>
                    @endforeach
                </datalist>
            @endif
        </div>
    </div>

