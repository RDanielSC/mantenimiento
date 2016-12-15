<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bomba extends Model
{
    protected $table = 'bomba';
    public $timestamps =false;
    protected $primaryKey = 'Bomba_ID';
    protected $fillable=[
        'Bomba_ID',
        'DoServicio',
        'DoUbicaionT',
        'DoTipoBomba',
        'DoAñoFab',
        'DoMarca',
        'DoModelo',
        'DoSerial',
        'DoPresion',
        'DoCaudal',
        'DoRpm',
        'DoAltura',
        'DoOrientacion',
        'DoIndustria',
        'DoImportancia',
        'DoEstado',
        'DoTipoLub','DoCapacidadLub',
        'DoCicloTrabajo',
        'DoCicloSemanales',
        'DoImplementos',
        'DoRodamientos',
        'DoDiametroImpu',
        'DtTemperatura','DtPresionSucc',
        'DtPresionDesc',
        'DtPresionDife',
        'DtBridaSucc',
        'DtBridaDesc',
        'DtPlacaObtu',
        'DtTipoAcople',
        'DsSelloRecomendado',
        'DsApiplan',
        'DsTipo',
        'DsCartucho',
        'DsMedidaNominal',
        'DmTag',
        'DmMarca',
        'DmModelo',
        'DmFrecuencia',
        'DmVolt',
        'DmKw',
        'DmHp',
        'DmRpm',
        'DmSerial',
        'DmObservaciones',

        'DmNAlaves',
        'DmRodamientos',
        'Equipo_ID',
        'DtuKW',
        'DtuMarca',
        'DtuTipo',
        'DtuPentra',
        'DtuPsalida',
        'DtuHP','DtuRPM','DtuNserie'];
}
