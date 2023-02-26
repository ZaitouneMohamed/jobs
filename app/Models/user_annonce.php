<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        "annonce_id",
        "user_id",
        "favorite",
        "pending"
    ];

}
