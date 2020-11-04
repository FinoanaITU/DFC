<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin_type_haut extends Model
{
    use HasFactory;

    public function bulletin_paie()
    {
        return $this->belongsToMany(Bulletin_paie::class);
    }
}
