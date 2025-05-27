<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascotas'; 

    protected $fillable = [
        'nombre',
        'edad',
        'especie',
        'owner_id',
        'raza_id',
    ];

    // Relación con el modelo Owner
    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    // Relación con el modelo Raza
    public function raza()
    {
        return $this->belongsTo(Raza::class);
    }
}