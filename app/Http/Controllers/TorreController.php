<?php

namespace App\Http\Controllers;

use App\Models\Torre;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Equipo;
class TorreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $torres = Torre::select('torre.Torre_ID',
            'equipo.Descripcion AS LEQUIPO',
            'equipo.Tag',
            'area.Descripcion AS LAREA',
            'sistema.Descripcion AS SIST',
            'subsistema.Descripcion AS SUBSIS',
            'equipo.Equipo_ID')
            ->join('equipo','equipo.Equipo_ID','=','torre.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.Sistema_ID')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.SubSistema_ID')->get();
/*dd($torres);*/
        return View('layer.Equipo.Torres.index')->with('torres',$torres);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos=Equipo::pluck('Descripcion','Equipo_ID');

        return view('layer.Equipo.Torres.create')->with('equipos',$equipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Torre::create($request->all());
        return redirect()->route('torre.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Torre_ID)
    {
        $torres = Torre::FindOrFail($Torre_ID);

        return view('layer.Equipo.Torres.show')->with('torres',$torres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Torre_ID)
    {
        $equipos =Equipo::lists('Descripcion','Equipo_ID')/*->prepend('Seleccioname el Equipo')*/;
        $torres = Torre::FindOrFail($Torre_ID);

        return view('layer.Equipo.Torres.edit',array('bombas'=>$torres,'equipos'=>$equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Torre_ID)
    {
        $torres = Torre::FindOrFail($Torre_ID);
        $input=$request->all();
        $torres->fill($input)->save();

        return redirect()->route('torre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Torre_ID)
    {
        $torres = Torre::FindOrFail($Torre_ID);
        $torres->delete();

        return redirect()->route('torre.index');
    }
}
