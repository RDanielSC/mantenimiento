<?php

namespace App\Http\Controllers;

use App\Models\Bomba;
use Illuminate\Http\Request;
use App\Models\Equipo;

use App\Http\Requests;
use Auth;
class BombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bombas = Bomba:: select('bomba.Bomba_ID',
            'equipo.Descripcion AS LEQUIPO',
            'equipo.Tag',
            'area.Descripcion AS LAREA',
            'sistema.Descripcion AS SIST',
            'subsistema.Descripcion AS SUBSIS',
            'equipo.Equipo_ID')
            ->join('equipo','equipo.Equipo_ID','=','bomba.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.Sistema_ID')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.SubSistema_ID')->get();

        return View('layer.Equipo.Bomba.index')->with('bombas',$bombas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

            $equipos=Equipo::pluck('Descripcion','Equipo_ID') ;
        if(Auth::user()->type == "admin")
            return view('layer.Equipo.Bomba.create')
            ->with('equipos',$equipos);
        return view('errors.503');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Bomba::create($request->all());

        return redirect()->route('bomba.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Bomba_ID)
    {

            $bombas = Bomba::FindOrFail($Bomba_ID);
        if(Auth::user()->type == "admin")
            return view('layer.Equipo.Bomba.show')->with('bombas',$bombas);
        return view('errors.503');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Bomba_ID)
    {

            $equipos =Equipo::lists('Descripcion','Equipo_ID')/*->prepend('Seleccioname el Equipo')*/;
            $bombas =Bomba::FindOrFail($Bomba_ID);
        if(Auth::user()->type == "admin")
            return view('layer.Equipo.Bomba.edit',array('bombas'=>$bombas,'equipos'=>$equipos));
        return view('errors.503');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Bomba_ID)
    {

        $bombas =Bomba::FindOrFail($Bomba_ID);
        $input=$request->all();
        $bombas->fill($input)->save();

        return redirect()->route('bomba.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Bomba_ID)
    {
        $bombas = Bomba::FindOrFail($Bomba_ID);
        $bombas->delete();

        return redirect()->route('bomba.index');
    }
}
