<?php

namespace App\Models;

use App\Models\Equipement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'password',
    ];

    public function equipement()
    {
        return $this->hasMany(Equipement::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }
}
