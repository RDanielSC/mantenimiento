<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planos extends Model
{
    protected $table = 'planos';
    public $timestamps =false;
    protected $primaryKey = 'Planos_ID';
    protected $fillable=[
        'Planos_ID',
        'Descripcion',
        'Equipo_ID',
        'dir_plano'
    ];
}
