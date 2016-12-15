<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
class Historial extends Model
{
    protected $table = 'historial';
    public $timestamps = false;
    protected $primaryKey = 'Historial_ID';
    protected $fillable = [
        'Historial_ID',
        'Equipo_ID',
        'FechaInicio',
        'FechaFin'
        , 'Operador_ID'
        , 'Repuesto_ID',
        'TipoMan_ID', 'Descripcion', 'path','Comentario','OrdenDeTrabajo'];

    public function setPathAttribute($path)
    {
        $this->attributes['path'] = Carbon::now()->second . $path->getClientOriginalName();
        $name = Carbon::now()->second . $path->getClientOriginalName();
        \Storage::disk('local')->put($name, \File::get($path));
    }
    public static function Historiales(){
        return DB::select('call listarHistorial');




        /*table('historial')        3
            ->join('equipo','equipo.Equipo_ID','=','historial.Equipo_ID')
            ->join('operador','operador.Operador_ID','=','historial.Operador_ID')
            ->join('repuesto','repuesto.Repuesto_ID','=','historial.Repuesto_ID')
            ->join('tipoman','tipoman.TipoMan_ID','=','historial.TipoMan_ID')

            ->select('historial.Historial_ID',
                'equipo.Descripcion as Equipo' ,
                'historial.FechaInicio',
                'historial.FechaFin',
                'operador.Nombre AS Operador',
                'repuesto.Descripcion AS Area',
                'tipoman.Descripcion as Tipoman',
                'historial.Descripcion',
                'datediff(historial.FechaFin,historial.FechaInicio) as Total '

                'historial.path as imghis')
            ->get();*/

    }
}