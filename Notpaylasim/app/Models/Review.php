<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = [
        'note_id',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate',
    ];

    public function note(){
        return $this->belongsTo(Notes::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
