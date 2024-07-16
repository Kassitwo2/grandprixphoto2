<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'is_conforme',
        'user_id',
        'admin_id',
        'category_id',

        
    ];


    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function juries()
    {
        return $this->hasManyThrough(Jury::class, Rating::class);
    }

}
