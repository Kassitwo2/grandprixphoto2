<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    use HasFactory;



    protected $table = 'villes';


    public function users()
    {
        return $this->hasMany(User::class);
    }

}
