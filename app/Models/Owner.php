<?php

namespace App\Models;

use App\Models\Mascota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    use HasFactory;

    
    protected $table = 'dueños';

    
    protected $fillable = [
        'nombre',
        'telefono',
        'direccion',
    ];

    // Relación con las mascotas
    public function mascotas()
    {
        return $this->hasMany(Mascota::class);
    }
}
