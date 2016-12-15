<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Gerencia;
use App\Models\Operador;
use App\Models\Area;
use Illuminate\Http\Request;

use App\Http\Requests;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$operadores = Operador:: select('operador.Operador_ID',
            'operador.Nombre',
            'operador.Llave',
            'cargo.Descripcion AS Cargo',
            'gerencia.Descripcion AS Gerencia',
            'area.Descripcion AS Area')
            ->join('cargo','cargo.Cargo_ID','=','operador.Cargo_ID')
            ->join('gerencia','gerencia.Gerencia_ID','=','operador.Gerencia_ID')
            ->join('area','area.Area_ID','=','operador.Area_ID')->get();*/
        return View('layer.Operador.index')/*->with('operadores',$operadores)*/;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cargos= Cargo::lists('Descripcion','Cargo_ID')->prepend('Seleccioname el Cargo');
        $gerencias= Gerencia::lists('Descripcion','Gerencia_ID')->prepend('Seleccioname la Gerencia');
        $areas= Area::lists('Descripcion','Area_ID')->prepend('Seleccioname el Area');
        return view('layer.Operador.create')
            ->with('cargos',$cargos)
            ->with('gerencias',$gerencias)
            ->with('areas',$areas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Operador::create($request->all());
        /*Session::flash('save','Se a creado correctamente');*/
        return redirect()->route('operador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Operador_ID)
    {
        $operadores = Operador::FindOrFail($Operador_ID);
        return view('layer.Operador.show')->with('operadores',$operadores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Operador_ID)

    {
        $cargos= Cargo::lists('Descripcion','Cargo_ID')->prepend('Seleccioname el Cargo');
        $gerencias= Gerencia::lists('Descripcion','Gerencia_ID')->prepend('Seleccioname la Gerencia');
        $areas= Area::lists('Descripcion','Area_ID')->prepend('Seleccioname el Area');

        $operadores = Operador::FindOrFail($Operador_ID);

        return view('layer.Operador.edit',array('operadores'=>$operadores,'cargos'=>$cargos,'gerencias'=>$gerencias,'areas'=>$areas));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Operador_ID)
    {
        $operadores=Operador::FindOrFail($Operador_ID);
        $input=$request->all();
        $operadores->fill($input)->save();
//        Session::flash('update','Se ha actualizado correctamente');

        return redirect()->route('operador.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Operador_ID)
    {
        $operadores = Operador::FindOrFail($Operador_ID);
        $operadores->delete();
//        Session::flash('delete','Se ha elimino correctamente');
        return redirect()->route('operador.index');
    }
}
