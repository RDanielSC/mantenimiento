<?php

namespace App\Http\Controllers;

use App\Models\Documentacion;
use App\Models\Historial;
use App\Models\Operador;
use App\Models\Repuesto;
use App\Models\TipoMan;
use Illuminate\Http\Request;
use App\Models\Equipo;
use Auth;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Storage;
class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historiales = Historial::Historiales();
        return View('layer.Historial.index')->with('historiales',$historiales)
            ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos = Equipo::lists('Descripcion','Equipo_ID');
        $operadores= Operador::lists('Nombre','Operador_ID');
        $repuestos= Repuesto::lists('Descripcion','Repuesto_ID');
        $tipomans= TipoMan::lists('Descripcion','TipoMan_ID');
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Historial.create')
            ->with('equipos',$equipos)
            ->with('operadores',$operadores)
            ->with('repuestos',$repuestos)
            ->with('tipomans',$tipomans);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Historial::create($request->all());
      /*  Session::flash('save','Se a creado correctamente');*/
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('historial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Historial_ID)
    {
        $historiales = Historial::FindOrFail($Historial_ID);
        return view('layer.Historial.show')->with('historiales',$historiales);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Historial_ID)
    {
        $equipos = Equipo::lists('Descripcion','Equipo_ID');
        $operadores= Operador::lists('Nombre','Operador_ID');
        $repuestos= Repuesto::lists('Descripcion','Repuesto_ID');
        $tipomans= TipoMan::lists('Descripcion','TipoMan_ID');
        $historiales = Historial::FindOrFail($Historial_ID);
        if (!Auth::check())

            return view('auth.login');

        return view('layer.Historial.edit',array('equipos'=>$equipos,'repuestos'=>$repuestos,'operadores'=>$operadores,
                                                'tipomans'=>$tipomans,'historiales'=>$historiales));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Historial_ID)
    {
        $historiales = Historial::FindOrFail($Historial_ID);

        Storage::delete($historiales->path);
        $historiales->delete();
        //Session::flash('delete','Se ha elimino correctamente');
        if (!Auth::check())

            return view('auth.login');
        return redirect()->route('historial.index');
    }
}
