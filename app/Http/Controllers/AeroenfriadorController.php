<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Aeroenfriador;
use App\Models\Area;
use App\Models\Equipo;
use App\Models\Sistema;
use App\Models\SubSistema;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Auth;
class AeroenfriadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $aeroenfriadores = Aeroenfriador:: select('aeroenfriadores.Aeroenfriador_ID',
            'equipo.Descripcion AS LEQUIPO',
            'equipo.Tag',
            'area.Descripcion AS LAREA',
            'sistema.Descripcion AS SIST',
            'subsistema.Descripcion AS SUBSIS',
            'equipo.Equipo_ID')
            ->join('equipo','equipo.Equipo_ID','=','aeroenfriadores.Equipo_ID')
            ->leftjoin('area','area.Area_ID','=','equipo.Area_ID')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.Sistema_ID')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.SubSistema_ID')->get();

        return View('layer.Equipo.Aeroenfriadores.index')->with('aeroenfriadores',$aeroenfriadores);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //aca va las variables de de la base de datos
        /* $model = new Aeroenfriador();
        //$model->Aeroenfriador_ID = "Ejemplo";
        $model->DAEServicio= "Ejemplo";
        $model->DAEAñoFab= "Ejemplo";
        $model->DAEMarca= "Ejemplo";
        $model->DAEModelo= "Ejemplo";
        $model->DAETemperatura= "Ejemplo";
        $model->DAELiquido= "Ejemplo";
        $model->DAEVTipo= "Ejemplo";
        $model->DAEVDiametro= "Ejemplo";
        $model->DAEVRPM= "Ejemplo";
        $model->DAEVKW= "Ejemplo";
        $model->DAEVAspa_Ventilador= "Ejemplo";
        $model->DAETKW= "Ejemplo";
        $model->DAETMarca= "Ejemplo";
        $model->DAETTipo= "Ejemplo";
        $model->DAETFrecuencia= "Ejemplo";
        $model->DAETRPM= "Ejemplo";
        $model->DAETVolts= "Ejemplo";
        $model->DAERTipo= "Ejemplo";
        $model->DAERModel= "Ejemplo";
        $model->DAERRatio= "Ejemplo";
        $model->DAERMFR= "Ejemplo";
        $model->Equipo_ID= "1";
        $model->DAERCorreas= "Ejemplo";*/


            $equipos=Equipo::pluck('Tag','Descripcion','Equipo_ID');

            Session::flash('save','Se a creado correctamente');
        if(Auth::user()->type == "admin")
            return view('layer.Equipo.Aeroenfriadores.create',compact('Equipo_ID','equipos'));
        return view('errors.503');


        /*      //------------------------------------------
        //este booleano miestra si guardo o no guardo
        $mensaje = "";

        if ($model->save()){
            $mensaje = "Aeroenfriador Guardo";
            return view('Models.Equipos.Aeroenfriador.index',compact('mensaje'));
        }else{
            $mensaje = "Aeroenfriador No Guardo";
            return view('Models.Equipos.Aeroenfriador.index',compact('mensaje'));
        }

        //-----------------------------------------------------------*/
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aeroenfriador::create($request->all());

        return redirect()->route('aeroenfriador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($Aeroenfriador_ID)
    {
        $aeroenfriadores = Aeroenfriador::FindOrFail($Aeroenfriador_ID);

        return view('layer.Equipo.Aeroenfriadores.show')->with('aeroenfriadores',$aeroenfriadores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Aeroenfriador_ID)
    {
        $equipos =Equipo::lists('Descripcion','Equipo_ID')/*->prepend('Seleccioname el Equipo')*/;
        $aeroenfriadores =Aeroenfriador::FindOrFail($Aeroenfriador_ID);
        if(Auth::user()->type == "admin")
            return view('layer.Equipo.Aeroenfriadores.edit',array('aeroenfriadores'=>$aeroenfriadores,'equipos'=>$equipos));
        return view('errors.503');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Aeroenfriador_ID)
    {
        $aeroenfriadores =Aeroenfriador::FindOrFail($Aeroenfriador_ID);
        $input=$request->all();
        $aeroenfriadores->fill($input)->save();
        Session::flash('update','Se ha actualizado correctamente');
        return redirect()->route('aeroenfriador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Aeroenfriador_ID)
    {
        if(Auth::user()->type == "admin")
            $aeroenfriadores = Aeroenfriador::FindOrFail($Aeroenfriador_ID);
            $aeroenfriadores->delete();
            Session::flash('delete','Se ha elimino correctamente');
            return redirect()->route('aeroenfriador.index');
        return view('errors.503');
    }
}
