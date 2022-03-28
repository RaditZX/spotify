<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    use HasFactory;
    protected $table = 'music';
    protected $fillable = ['name','music','composer','lyric','image','user_id'];
}
