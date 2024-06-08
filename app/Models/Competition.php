<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable = [
        'name',
    ];
    public function results()
    {
        return $this->hasMany(Result::class);
    }
    use HasFactory;
}
