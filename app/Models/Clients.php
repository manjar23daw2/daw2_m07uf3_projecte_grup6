<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'dni',
        'nom',
        'cognom',
        'edat',
        'adreça',
        'ciutat',
        'pais',
        'email',
        'tipus_targeta',
        'numero_targeta', 
    ];
}
