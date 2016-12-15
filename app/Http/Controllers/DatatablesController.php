<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Equipo;
use App\User;

use Yajra\Datatables\Datatables;
class DatatablesController extends Controller
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
        return Datatables::of(User::query())->make(true);
    }
    public function getHasOne(Request $request)
    {
        if ($request->ajax()) {
            $query = Equipo::with('Area_ID')->with('Sistema_ID')->with('SubSistema_ID')->select('users.*');

            return $this->dataTable
                ->eloquent($query)
                ->addColumn('title', function (Equipo $equipo) {
                    return $equipo->Area_ID->map(function($area_id) {
                        return str_limit($area_id->title, 30, '...');
                    })->implode('<br>');
                })
                ->make(true);
        }

        return view('datatables.relation.has-one', [
            'title' => 'Has Many Eager Loading Demo',
            'controller' => 'Relation Controller',
        ]);
    }
}

