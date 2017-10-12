<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable =['id', 'author_id', 'body', 'image_id'];

    public  function  comments(){
        return $this->hasMany(Comment::class,'on_post');
    }

    public function author(){
        return $this->belongsTo(User::class,'author_id');
    }

    public function images(){
        return $this->hasOne(Image::class,'id','image_id');
    }
}
