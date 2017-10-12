<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';
    protected $fillable =['id','nametag'];


    public function post(){
        return $this->belongsTo(Post::class,'on_post');
    }
}
