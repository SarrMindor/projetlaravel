<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
protected $fillable = ['_token', /* autres attributs fillable */];

    public function competitions()
    {
        return $this->belongsTo(Competition::class);
    }
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    use HasFactory;
}
