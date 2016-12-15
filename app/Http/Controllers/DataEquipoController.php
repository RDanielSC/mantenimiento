<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DataTables\EquipoDataTable;
class DataEquipoController extends Controller
{
    public function index(EquipoDataTable $dataTable)
    {
        return $dataTable->render('equipos');
    }
}
