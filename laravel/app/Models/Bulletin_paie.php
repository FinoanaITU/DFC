<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bulletin_paie extends Model
{
    use HasFactory;

    public function societe(){
        return $this->belongsTo(Societe::class);
    }

    public function parametre(){
        return $this->belongsTo(Societe::class);
    }

    public function bulletin_type_haut()
    {
        return $this->belongsToMany(Bulletin_type_haut::class);
    }

    public function bulletin_type_bas()
    {
        return $this->belongsToMany(Bulletin_type_bas::class);
    }
}
