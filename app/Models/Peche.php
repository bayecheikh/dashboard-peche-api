<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Peche extends Model
{
    use HasFactory;
    
    protected $fillable = ['region','espece','quantite','site_id'];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}


