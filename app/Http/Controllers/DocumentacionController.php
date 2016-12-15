<?php

namespace App\Http\Controllers;

use App\Models\Documentacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Models\Equipo;
use Illuminate\Support\Facades\Storage;

class DocumentacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $documentaciones = Documentacion::Documentaciones();
        if (!Auth::check())

            return view('auth.login');*/
        return View('layer.Documentacion.index')/*->with('documentaciones',$documentaciones)*/;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $equipos= Equipo::lists('Descripcion','Equipo_ID');

        return view('layer.Documentacion.create')
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
        Documentacion::create($request->all());
        //Session::flash('save','Se a creado correctamente');

        return redirect()->route('documentacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Doc_ID)
    {
        $documentaciones = Documentacion::FindOrFail($Doc_ID);
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Documentacion.show')->with('documentaciones',$documentaciones);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Doc_ID)
    {
        $equipos= Equipo::lists('Descripcion','Equipo_ID')->prepend('Seleccioname el Equipo');
        $documentaciones = Documentacion::FindOrFail($Doc_ID);
        if (!Auth::check())

            return view('auth.login');

        return view('layer.Documentacion.edit',array('equipos'=>$equipos,'documentaciones'=>$documentaciones));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Doc_ID)
    {
        $documentaciones=Documentacion::FindOrFail($Doc_ID);
        $input=$request->all();
        $documentaciones->fill($input)->save();
        //Session::flash('update','Se ha actualizado correctamente');


        return redirect()->route('documentacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Doc_ID)
    {
        $documentaciones=Documentacion::FindOrFail($Doc_ID);

        Storage::delete($documentaciones->urlDoc);

        $documentaciones->delete();
        //Session::flash('delete','Se ha elimino correctamente');


        return redirect()->route('documentacion.index');
    }
}
