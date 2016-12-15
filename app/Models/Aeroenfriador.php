<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aeroenfriador extends Model
{
    //
    protected $table = 'aeroenfriadores';
    public $timestamps =false;
    protected $primaryKey = 'Aeroenfriador_ID';
    protected $fillable=[
                            'Aeroenfriador_ID',
                            'DAEServicio',
                            'DAEAñoFab',
                            'DAEMarca',
                            'DAEModelo',
                            'DAETemperatura',
                            'DAELiquido',
                            'DAEVTipo',
                            'DAEVDiametro',
                            'DAEVRPM',
                            'DAEVKW',
                            'DAEVAspa_Ventilador',
                            'DAETKW',
                            'DAETMarca',
                            'DAETTipo',
                            'DAETFrecuencia',
                            'DAETRPM',
                            'DAETVolts',
                            'DAERTipo',
                            'DAERModel',
                            'DAERRatio',
                            'DAERMFR',
                            'Equipo_ID',
                            'DAERCorreas',
                            'DAEMhp',
                            'DAEMmarca',
                            'DAEMtipo',
                            'DAEMfrecuencia',
                            'DAEMrpm',
                            'DAEMvolts'
    ];





}
