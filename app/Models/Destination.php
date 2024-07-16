<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'hora_salida', 'hora_llegada'];

    public function journeys()
    {
        return $this->hasMany(Journey::class);
    }
}
