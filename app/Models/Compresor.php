<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compresor extends Model
{
    protected $table = 'compresores';
    public $timestamps =false;
    protected $primaryKey = 'Compresor_ID';
    protected $fillable=[


'Compresor_ID',
'Equipo_ID',
'CoDoAccionador',
'CoDoServicio',
'CoDoAñoFab',
'CoDoMarca',
'CoDoModelo',
'CoDoNoSerie',
'CoDoCapacEntrada',
'CoDoTempEntrada',
'CoDoTempMaxDesc',
'CoDoPresEntradaNominal',
'DCPreDescargaNominal',
'CoDoPresMaxDescarga',
'CoDoVelNo',
'CoDoVelMaxContinua',
'CoDoOrientacion',
'CoDoIndustria',
'CoDoTipodeMan',
'CoDoImporProce',
'CoDoEstado',
'CoDoTipoLub',
'CoDoCapLub',
'CoDoCicloTrab',
'CoDoCicloSema',
'CoDoUbiTecni',
'CoDoPresBarome',
'CoDoPrimVelCritica',
'CoDoObserv',
'CoDoTamañ',
'CoDoMaxVel',
'CoDoMaxHP',
'CoDoMaxRodLoad',
'CoCrMarca',
'CoCrParteNu',
'CoCrSerie',
'CoCrModelo',
'CoCrImput_RPM',
'CoCrRatio',
'CoCrCat_Rating',
'CoCrService_Rating',
'CoMoMarca',
'CoMoModelo',
'CoMoKWyHP',
'CoMoRPM',
'CoMo_Frecuencia',
'CoMotorVolts',
'CoMoNro_serie',
'CoMoRodamiento',
'CoMoObservaciones',
'CoTuModelo',
'CoTuHP',
'CoTuRPM',
'CoTuPresIn',
'CoTuTempIn',
'CoTuNoSerie',
'CoTuVelRotacion',
'CoTuPresInX',
'CoTuTempInX',
'CoTuRodamiento',
'CoTuObservaciones'];
}
