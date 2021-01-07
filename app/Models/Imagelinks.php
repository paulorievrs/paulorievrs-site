<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagelinks extends Model
{
    use HasFactory;

    protected $table = "imagelinks";

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
