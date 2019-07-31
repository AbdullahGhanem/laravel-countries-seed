<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use \Dimsav\Translatable\Translatable;
    
    public $translatedAttributes = ['name'];
    protected $fillable = [];
    
}
