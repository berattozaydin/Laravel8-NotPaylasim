<?php

namespace App\Http\Livewire;
use Illuminate\Support\Facades\Auth;
use App\Models\Notes;
use Livewire\Component;

class Review extends Component
{
    public $record, $subject, $review ,$note_id,$rate;

    public function mount($id){
        $this->record = Notes::findOrFail($id);
        $this->note_id = $this->record->id;
    }

    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput(){
        $this->subject = null;
        $this->review = null;
        $this->note_id=null;
        $this->IP = null;
    }

    public function store()
    {

        $this->validate([
            'subject' => 'required|min:5',
            'review' => 'required|min:10',

        ]);
    \App\Models\Review::create([
            'note_id' => $this->note_id,
            'user_id'=> Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review' => $this->review,


        ]);

        session()->flash('message','Revire Send Successfully');
        $this->resetInput();

    }

}
