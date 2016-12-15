<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class pdfHistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Historial_ID)
    {
        $historiales = DB::select('call verhistorial('.$Historial_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Historial.verpdf',['historiales'=>$historiales]);
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Historial_ID)
    {
        $historiales = DB::table('historial')
            ->select('equipo.Descripcion as Equipo,equipo.Tag , area.Descripcion as Area, 
    (DATE_FORMAT(historial.FechaInicio,\'%d-%m-%Y\')) as FechaInicio,
    (DATE_FORMAT(historial.FechaFin,\'%d-%m-%Y\')) as FechaFin ,
    datediff(FechaFin,FechaInicio) as Totalfecha,
    operador.Nombre as Operador,cargo.Descripcion as Cargo,
    gerencia.Descripcion as Gerencia, repuesto.Descripcion as Repuesto,
    repuesto.NoParte,repuesto.Dimension,tipoman.Descripcion as Tipoman,historial.Descripcion,
    repuesto.imgrepuesto')
            ->join('historial','historial.Historial_ID','=',''.$Historial_ID.'')
        ->join('equipo','equipo.Equipo_ID','=','historial.Equipo_ID')
        ->join('operador','historial.Operador_ID','=','operador.Operador_ID')
        ->join('cargo','operador.Cargo_ID','=','cargo.Cargo_ID')
        ->join('gerencia','operador.Gerencia_ID','=','gerencia.Gerencia_ID')
            ->join('repuesto','historial.Repuesto_ID','=','repuesto.Repuesto_ID')
            ->join('tipoman','historial.TipoMan_ID','=','tipoman.TipoMan_ID')
            ->join('area','equipo.Area_ID','=','area.Area_ID')
            ->get();

            $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Historial.verpdf',['historiales'=>$historiales]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
