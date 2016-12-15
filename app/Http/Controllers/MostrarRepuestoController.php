<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Repuesto;
use App\Http\Requests\Equipo;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class MostrarRepuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
       $Repuesto= DB::select();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $repuestos=Repuesto::select('repuesto.Repuesto_ID',
            'repuesto.Descripcion',
            'repuesto.NoParte',
            'repuesto.Dimension',
        'equipo.Descripcion as Equipo',
            'equipo.Tag',
            'area.Descripcion AS Area',
            'repuesto.imgrepuesto')

            ->join('equipo','equipo.Equipo_ID','=','repuesto.Equipo_ID')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->where('equipo.Equipo_ID','=',$id)
            ->get();
        $equipo=DB::table('equipo')
            ->select('Descripcion','Tag')

            ->where('Equipo_ID',$id)->get();


        return View('layer.Repuestos.index1')->with('repuestos',$repuestos) ->with('equipo',$equipo);
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
