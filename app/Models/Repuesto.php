<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;
class Repuesto extends Model
{
    protected $table = 'repuesto';
    public $timestamps =false;
    protected $primaryKey = 'Repuesto_ID';
    protected $fillable =[
        'Repuesto_ID',
        'Descripcion',
        'NoParte',
        'Dimension',
        'Equipo_ID',
    'imgrepuesto'];

    public function setImgrepuestoAttribute($imgrepuesto)
    {
        $this->attributes['imgrepuesto']=Carbon::now()->second.$imgrepuesto->getClientOriginalName();
        $name =Carbon::now()->second.$imgrepuesto->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($imgrepuesto));
    }

    public static function Repuestos(){
        return DB::table('repuesto')
            ->join('equipo','equipo.Equipo_ID','=','repuesto.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
           ->select('repuesto.Repuesto_ID',
                'repuesto.Descripcion',
                'repuesto.NoParte',
                'repuesto.Dimension',
                'equipo.Descripcion AS Equipo',
                'area.Descripcion AS Area',
                'repuesto.imgrepuesto')
                ->get();

    }

}