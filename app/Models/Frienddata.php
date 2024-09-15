<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frienddata extends Model
{
    use HasFactory;
    protected $fillable = [
        'friend_id',
        'user_id'
    ];
}
