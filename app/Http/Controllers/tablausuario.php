<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
class tablausuario extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $users = User::select()->get();
        return Datatables::of($users)
            ->addColumn('action', function ($users) {
                return '<a href="'.route('usuario.edit',$users->id).'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Editar</a>
                        <a href="'.route('usuario.destroy',$users->id).'" onclick="return confirm(\'¿Seguro que quieres eliminar a '.$users->name.'?\')" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-trash"></i> Eliminar</a>';})
            ->addColumn('tipodeusuario', function ($users) {
                if (($users->type)=='admin')
                    return '<span class="label label-primary">'.$users->type.'</span>';
                return '<span class="label label-success">'.$users->type.'</span>';
        })->make(true);
        /*  return Datatables::of(Equipo::query())->make(true);*/
    }
}
