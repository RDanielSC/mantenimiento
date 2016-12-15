<?php

namespace App\Http\Controllers;
use App\Models\Equipo;
use App\Models\TipoMan;
use Illuminate\Http\Request;
use App\Models\Compresor;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
class CompresorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compresores = Compresor:: select('compresores.Compresor_ID',
            'equipo.Descripcion AS LEQUIPO',
            'equipo.Tag',
            'area.Descripcion AS LAREA',
            'sistema.Descripcion AS SIST',
            'subsistema.Descripcion AS SUBSIS',
            'equipo.Equipo_ID')
            ->join('equipo','equipo.Equipo_ID','=','compresores.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.Sistema_ID')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.SubSistema_ID')->get();
        if (!Auth::check())

            return view('auth.login');
        return View('layer.Equipo.Compresores.index')->with('compresores',$compresores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        $equipos=Equipo::lists('Descripcion','Equipo_ID')->prepend('Seleccioname el Equipo');
/*$tipoman=TipoMan::lists('Descripcion','')*/
        $equipos=Equipo::pluck('Descripcion','Equipo_ID');
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Equipo.Compresores.create')
            ->with('equipos',$equipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Compresor::create($request->all());
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('compresor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Compresor_ID)
    {
        $compresores = Compresor::FindOrFail($Compresor_ID);
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Equipo.Compresores.show')->with('compresores',$compresores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Compresor_ID)
    {
        $equipos =Equipo::lists('Descripcion','Equipo_ID')
        ;
        $compresores =Compresor::FindOrFail($Compresor_ID);
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Equipo.Compresores.edit',array('compresores'=>$compresores,'equipos'=>$equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Compresor_ID)
    {
        $compresores =Compresor::FindOrFail($Compresor_ID);
        $input=$request->all();
        $compresores->fill($input)->save();
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('compresor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Compresor_ID)
    {
        $compresores = Compresor::FindOrFail($Compresor_ID);
        $compresores->delete();
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('compresor.index');
    }
}
