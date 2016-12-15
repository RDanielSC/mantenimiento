<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\PDF;
class pdfBombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($Bomba_ID)
    {
        $bombas = DB::select('call ver_bomba('.$Bomba_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Equipo.Bomba.verpdf',['bombas'=>$bombas]);
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
    public function store(Request $Bomba_ID)
    {
        $bombas = DB:: select('call ver_bomba('.$Bomba_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Equipo.Bomba.verpdf',['bombas'=>$bombas]);
        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Bomba_ID)
    {
        $bombas = DB:: select('call ver_bomba('.$Bomba_ID.')');
        $pdf = app('dompdf.wrapper');

        $pdf->loadView('layer.Equipo.Bomba.verpdf',['bombas'=>$bombas]);
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
