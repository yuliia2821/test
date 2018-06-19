<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    protected $fillable = ['name','email','price','id_event'];
    public $timestamps = false;
}

