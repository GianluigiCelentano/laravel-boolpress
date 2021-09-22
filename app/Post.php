<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function PostDetail() {
        return $this->belongsTo(PostDetail::class);
    }
    
}
