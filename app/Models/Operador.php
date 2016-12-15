<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    protected $table = 'operador';
    public $timestamps =false;
    protected $primaryKey = 'Operador_ID';
    protected $fillable =[
        'Operador_ID','Nombre','Llave','Cargo_ID','Gerencia_ID','Area_ID'];

}