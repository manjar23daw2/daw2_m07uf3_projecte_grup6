<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartament extends Model
{
    use HasFactory;
    protected $primaryKey = 'codi_unic';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'codi_unic',
        'referencia_catastral',
        'ciutat',
        'barri',
        'nom_carrer',
        'numero_carrer',
        'pis',
        'llits',
        'habitacions',
        'ascensor',
        'calefacció',
        'aire_condicionat'  
    ];
}
