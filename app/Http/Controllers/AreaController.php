<?php


namespace App\Http\Controllers;

use App\Models\Area;
use Auth;

class AreaController extends Controller
{
    public function index()
    {
        $areas =Area::all();
        if (!Auth::check())

            return view('auth.login');

        return View('layer.Area.index')->with('areas',$areas);
    }
    public function create()
    {
        if (!Auth::check())

            return view('auth.login');
        return view('layer.Area.create');
    }


    public function store()
    {
        //aca va las variables de de la base de datos
        $model = new Area();
        $model->Descripcion = "Ejemplo";
        //------------------------------------------
        //este booleano miestra si guardo o no guardo
        $mensaje = "";

        if ($model->save()){
            $mensaje = "Guardo";
            return view('layer.Area.store',compact('mensaje'));
        }else{
            $mensaje = "No Guardo";
            return view('layer.Area.store',compact('mensaje'));
        }

        //-----------------------------------------------------------

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}