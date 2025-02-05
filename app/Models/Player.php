<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name','age', 'position', 'team_id'];
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    use HasFactory;
}
