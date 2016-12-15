<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use App\Models\Repuesto;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$repuestos = Repuesto::Repuestos();
        if (!Auth::check())

        return view('auth.login');*/
        return View('layer.Repuestos.index')/*->with('repuestos',$repuestos)*/;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos= Equipo::lists('Descripcion','Equipo_ID');
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Repuestos.create')
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
        Repuesto::create($request->all());
        //Session::flash('save','Se a creado correctamente');
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('repuesto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Repuesto_ID)
    {
        $repuestos = Repuesto::FindOrFail($Repuesto_ID);
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Repuestos.show')->with('repuestos',$repuestos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Repuesto_ID)
    {
        $equipos= Equipo::lists('Descripcion','Equipo_ID')->prepend('Seleccioname el Equipo');
        $repuestos = Repuesto::FindOrFail($Repuesto_ID);

        return view('layer.Repuestos.edit',array('equipos'=>$equipos,'repuestos'=>$repuestos));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Repuesto_ID)
    {
        $repuestos=Repuesto::FindOrFail($Repuesto_ID);

        $input=$request->all();
        $repuestos->fill($input)->save();
        //Session::flash('update','Se ha actualizado correctamente');


        return redirect()->route('repuesto.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Repuesto_ID)
    {
        $repuestos = Repuesto::FindOrFail($Repuesto_ID);

        Storage::delete($repuestos->imgrepuesto);
        $repuestos->delete();
        //Session::flash('delete','Se ha elimino correctamente');
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('repuesto.index');
    }
}
