<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extralink extends Model
{
    use HasFactory;

    protected $table = "extralinks";

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
