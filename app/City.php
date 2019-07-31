<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use \Dimsav\Translatable\Translatable;
    
    public $translatedAttributes = ['name'];
    protected $fillable = [];
    
}
