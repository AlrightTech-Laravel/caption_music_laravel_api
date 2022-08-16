<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMusic extends Model
{
    use HasFactory;

    protected $table = 'post_musics';

    protected $fillables = [
        'title','mp3',
    ];
}
