<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    public function imagelinks()
    {
        return $this->hasMany(Imagelinks::class, 'postId');
    }

    public function extralinks()
    {
        return $this->hasMany(Extralink::class, 'postId');
    }


}
