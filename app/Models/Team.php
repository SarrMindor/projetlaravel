<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'description'];
    public function players()
    {
        return $this->hasMany(Player::class);
    }
    
    public function results()
    {
        return $this->hasMany(Result::class);
    }
    use HasFactory;
}
