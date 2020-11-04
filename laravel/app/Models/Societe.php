<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Societe extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function listSalaries()
    {
        return $this->hasMany(Salaries::class);
    }

    public function bulletinPaie()
    {
        return $this->hasMany(Bulletin_paie::class);
    }
}
