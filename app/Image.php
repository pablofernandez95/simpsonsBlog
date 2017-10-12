<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable =['id','nameImage'];

    public  function  posts(){
        return $this->hasOne('App\Post');
    }

}
