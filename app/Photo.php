<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $fillable = ['path'];

    protected $imgdir = '/images/';



    public function getPathAttribute($photo){

        return $this->imgdir . $photo;
    }
}
