<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    protected $fillable = ['caption'];
    public $timestamps = false;

    public function bids(){
        return $this->hasMany(Bid::class,'id_event');
    }
}
