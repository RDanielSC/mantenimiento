<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Torre extends Model
{
    protected $table = 'torre';
    public $timestamps =false;
    protected $primaryKey = 'Torre_ID';
    protected $fillable=[
        'Torre_ID',
        'Equipo_ID',
        'DTMarca',
        'DTAñoF',
        'DTServ',
        'DTModelo',
        'DTImplemento',
        'DTUbiTec',
        'DTciclos',
        'DTorientacion',
        'DTIndus',
        'DTTipoMan',
        'DTImport',
        'DTEstado',
        'DTciclodetra',
        'DTMhp',
        'DTMmarca',
        'DTMtipo',
        'DTMFrecuencia',
        'DTMRodamiento',
        'DTMrpm',
        'DTMvolts',
        'DTMkw',
        'DTObservaciones'];
}
