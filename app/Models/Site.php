<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;
    
    protected $fillable = ['nom','region','lat','lng'];

    public function peches()
    {
        return $this->hasMany(Peche::class);
    }
}

