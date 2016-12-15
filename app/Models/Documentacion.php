<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

use Carbon\Carbon;
class Documentacion extends Model
{
    protected $table = 'documentacion';
    public $timestamps =false;
    protected $primaryKey = 'Doc_ID';
    protected $fillable =[
        'Doc_ID',
        'Descripcion',
        'Equipo_ID',
        'urlDoc'

        ];

    public function setUrlDocAttribute($urlDoc)
    {
        $this->attributes['urlDoc']=Carbon::now()->second.$urlDoc->getClientOriginalName();
        $name =Carbon::now()->second.$urlDoc->getClientOriginalName();
        \Storage::disk('local')->put($name,\File::get($urlDoc));
    }

    public static function Documentaciones(){
        return DB::table('documentacion')
            ->join('equipo','equipo.Equipo_ID','=','documentacion.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->select('documentacion.Doc_ID',
                'documentacion.Descripcion',
            'equipo.Tag',
                'equipo.Descripcion AS Equipo',
                'area.Descripcion AS Area',
                'documentacion.urlDoc')
            ->get();

    }
}
