<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_vehicule',
    ];

    public function sim()
    {
        return $this->hasOne(Sim::class);
    }
}
