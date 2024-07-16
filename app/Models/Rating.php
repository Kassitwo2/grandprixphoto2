<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $fillable = ['jury_id', 'admin_id', 'participation_id', 'rating', 'like'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participation()
    {
        return $this->belongsTo(Participation::class);
    }
    
    public function jury()
    {
        return $this->belongsTo(Jury::class);
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
