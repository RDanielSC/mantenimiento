<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->type == "admin")
            return View('usuario.index');
                return view('errors.503');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->type == "admin")
            return view('usuario.create');
        return view('errors.503');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users= new User($request->all());
        if(Auth::user()->type == "admin")

            $users->password=bcrypt($request->password);
            $users->save();
            return view('usuario.index');

        return view('errors.503');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $users = User::Find($id);
        if(Auth::user()->type == "admin")
            $users->delete();
            return redirect()->route('usuario.index');
        return view('errors.503');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $users = User::FindOrFail($id);
        if(Auth::user()->type == "admin")
            return view('usuario.edit')->with('users',$users);
        return view('errors.503');

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

        $users=User::FindOrFail($id);
        if(Auth::user()->type == "admin")

            $input=$request->all();
            $users->fill($input);
            $users->password=bcrypt($request->password);
            $users->save();
            return redirect()->route('usuario.index');

        return view('errors.503');

        /*$users=User::FindOrFail($id);
        $users->name=$request->name;
        $users->email=$request->email;
        $users->type=$request->type;
        $users->password=bcrypt($request->password);
        $users->save();*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::Find($id);
        $users->delete();
        Session::flash('delete','Se ha elimino correctamente');
        return redirect()->route('usuario.index');
    }
}
