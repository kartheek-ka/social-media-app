<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friendlink extends Model
{
    use HasFactory;
    protected $fillable = [
        'friend_id',
        'user_id'
    ];
}
