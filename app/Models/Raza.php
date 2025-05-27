<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
<<<<<<< HEAD
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación con mascotas
    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}
=======
    protected $fillable = ['nombre', 'tipo'];
}
>>>>>>> 6bbda65202589a38f8b261203bc4d6a9b26bdea2
