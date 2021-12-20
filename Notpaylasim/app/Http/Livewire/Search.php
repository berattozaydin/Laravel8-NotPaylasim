<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Notes;
use App\Models\Setting;
class Search extends Component
{
    public $search = '';
    public function render()
    {
        $datalist=Notes::where('title','like','%'.$this->search.'%')->get();

        return view('livewire.search',['datalist'=>$datalist,'query'=>$this->search]);
    }
}
