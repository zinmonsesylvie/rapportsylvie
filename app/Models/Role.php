<?php

namespace App\Models;

use App\Models\Utilisateur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_role',
    ];

    public function utilisateur()
    {
        return $this->hasMany(Utilisateur::class);
    }
}
