<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
class pdfAeroenfriadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Aeroenfriador_ID)
    {
        $aeroenfriadores = DB:: select('call ver_aeroenfriador('.$Aeroenfriador_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Equipo.Aeroenfriadores.verpdf',['aeroenfriadores'=>$aeroenfriadores]);
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
    public function store(Request $Aeroenfriador_ID)
    {
        $aeroenfriadores = DB:: select('call ver_aeroenfriador('.$Aeroenfriador_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Equipo.Aeroenfriadores.verpdf',['aeroenfriadores'=>$aeroenfriadores]);
        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Aeroenfriador_ID)
    {
        $aeroenfriadores = DB:: select('call ver_aeroenfriador('.$Aeroenfriador_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Equipo.Aeroenfriadores.verpdf',['aeroenfriadores'=>$aeroenfriadores]);
        return $pdf->stream();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Aeroenfriador_ID)
    {

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
