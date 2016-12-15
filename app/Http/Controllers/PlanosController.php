<?php

namespace App\Http\Controllers;

use App\Models\Documentacion;
use App\Models\Equipo;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class PlanosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $documentaciones = Documentacion::Documentaciones();

               if (!Auth::check())

                   return view('auth.login');
        return View('layer.Documentacion.1index')->with('documentaciones',$documentaciones);

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
    public function show($documento)
    {
        /*$doc=Documentacion::all();
        if ($doc->Equipo_ID==$documento)
        {
            ;
        }
        //si no se encuentra lanzamos un error 404.
        abort(50);*/
/*if (Documentacion::exist($documento)){*/

        $documentaciones = DB::select('call verdoc('.$documento.')');
$equipo=DB::table('equipo')
    ->select('Descripcion','Tag')

            ->where('Equipo_ID',$documento)->get();

         return View('layer.Documentacion.index1')->with('documentaciones',$documentaciones)
             ->with('equipo',$equipo)
             ;
/*else{return view('errors.404');}*/








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
