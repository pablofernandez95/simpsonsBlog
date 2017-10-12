<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable = ['id','on_post','from_user','body'];

public function author(){

    return $this->belongsTo(User::class,'from_user');
}

    public function post(){
        return $this->belongsTo(Post::class,'on_post');
    }
}
