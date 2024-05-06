<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lloga extends Model
{
    use HasFactory;
    protected $primaryKey = ['dni', 'codi_unic'];
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'dni',
        'codi_unic',
        'data_inici_lloguer',
        'hora_inici_lloguer',
        'data_final_lloguer',
        'hora_final_lloguer',
        'lloc_lliurament_claus',
        'lloc_devolució_claus',
        'preu_dia',
        'diposit',
        'quantitat_diposit',
        'tipus_assegurança',  
    ];
}
