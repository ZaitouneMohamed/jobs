<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'adresse',
        'user_id',
        'contact_info',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
