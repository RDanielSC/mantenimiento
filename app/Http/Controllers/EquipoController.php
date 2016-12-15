<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Equipo;
use App\Models\Sistema;
use App\Models\SubSistema;
use App\Http\Requests\Equipo\EquipoUpdateRequest;
use App\Http\Requests\Equipo\EquipoCreateRequest;
use Session;
use Illuminate\Support\Facades\Auth;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$equipos = Equipo:: select('equipo.Equipo_ID',
            'equipo.Descripcion AS LEquipo',
            'equipo.Tag',
            'area.Descripcion AS Area',
            'sistema.Descripcion AS Sistema',
            'subsistema.Descripcion AS SubSistema')
            ->join('area','area.Area_ID','=','equipo.area_id')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.sistema_id')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.subsistema_id')->paginate(10);
        if (!Auth::check())

            return view('auth.login');*/
     return View('layer.Equipo.index')/*->with('equipos',$equipos)*/;



    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $areas= Area::lists('Descripcion','Area_ID')->prepend('Seleccioname el Area');
        $sistemas= Sistema::lists('Descripcion','Sistema_ID')->prepend('Seleccioname el Sistema');
        $subsistemas= SubSistema::lists('Descripcion','SubSistema_ID')->prepend('Seleccioname el SubSistema');
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Equipo.create')
            ->with('areas',$areas)
            ->with('sistemas',$sistemas)
            ->with('subsistemas',$subsistemas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipoCreateRequest $request)
    {
        Equipo::create($request->all());
        Session::flash('save','Se a creado correctamente');
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('equipo.index');
    }

    /**
         * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Equipo_ID)
    {
        $equipos = Equipo::FindOrFail($Equipo_ID);
        return view('layer.Equipo.show')->with('equipos',$equipos);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Equipo_ID)
    {
        $areas= Area::lists('Descripcion','Area_ID')->prepend('Seleccioname el Area');
        $sistemas= Sistema::lists('Descripcion','Sistema_ID')->prepend('Seleccioname el Sistema');
        $subsistemas= SubSistema::lists('Descripcion','SubSistema_ID')->prepend('Seleccioname el SubSistema');
        $equipos = Equipo::FindOrFail($Equipo_ID);

        return view('layer.Equipo.edit',array('equipos'=>$equipos,'areas'=>$areas,'sistemas'=>$sistemas,'subsistemas'=>$subsistemas));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipoUpdateRequest $request, $Equipo_ID)
    {
        $equipos=Equipo::FindOrFail($Equipo_ID);
        $input=$request->all();
        $equipos->fill($input)->save();
        Session::flash('update','Se ha actualizado correctamente');

        return redirect()->route('equipo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Equipo_ID)
    {
        $equipos = Equipo::FindOrFail($Equipo_ID);
        $equipos->delete();
        Session::flash('delete','Se ha elimino correctamente');
        return redirect()->route('equipo.index');
    }


}
