<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    use HasFactory;

    public $timestamps = false;
     
    protected $table = 'periodos';

    protected $fillable = [
        'clave_periodo',
        'nombre_periodo',
        'estatus',
    ];

    public function grupos(){
        return $this->hasMany(Grupo::class);
    }
}
