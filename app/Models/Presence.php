<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'dateFormation',
        'prenom',
        'email',
        'telephone',
        'genre',
    ];
}
