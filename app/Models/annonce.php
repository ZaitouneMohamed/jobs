<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'nature',
        'salary',
        'description',
        'company_id',
        'user_id',
        'categorie_id',
        'responsibility',
        'qualification',
        'duration',
        'niveau_etude',
        'visits',
    ];
}
