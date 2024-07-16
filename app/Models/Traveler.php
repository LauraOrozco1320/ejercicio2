<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveler extends Model
{
    use HasFactory;

    protected $fillable = ['dni', 'nombre', 'direccion', 'telefono', 'journey_id'];

    public function journey()
    {
        return $this->belongsTo(Journey::class);
    }

}
