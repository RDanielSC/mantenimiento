<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipo';
    public $timestamps =false;
    protected $primaryKey = 'Equipo_ID';
    protected $fillable =[
            'Equipo_ID','Descripcion','Area_ID','Sistema_ID','SubSistema_ID','Tag','Operador_ID'];

}
