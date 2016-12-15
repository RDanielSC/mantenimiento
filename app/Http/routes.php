<?php
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('auth.login');
});

/*Route::get('home', function () {
    return view('home');
});*/
/*Route::get('verpdff', function () {
    return view('layer.Equipo.Aeroenfriadores.verpdf');
});*/
Route::group(['middleware' => 'auth'], function () {

    Route::resource('area','AreaController');
    Route::resource('subsistema','SubSistemaController');
    Route::resource('equipo','EquipoController');
    Route::resource('aeroenfriador','AeroenfriadorController');

    Route::resource('usuario','UsuarioController');

    Route::resource('compresor','CompresorController');
    Route::resource('bomba','BombaController');
    Route::resource('torre','TorreController');
    Route::resource('operador','OperadorController');
    Route::resource('repuesto','RepuestoController');
    Route::resource('historial','HistorialController');
    route::resource('documentacion','DocumentacionController');
    route::resource('planos','PlanosController');


//----------Controladores de Generadores de PDF's-----------------
/**/    Route::resource('pdfaeroenfriador','pdfAeroenfriadorController');
/**/    Route::resource('pdfbomba','pdfbombaController');
/*-------------------------------------------------------------------------*/
        Route::resource('pdfcompresor','pdfCompresorController');
        Route::resource('pdftorre','pdfTorreController');

        Route::resource('pdfhistorial','pdfHistorialController');
    Route::resource('mostrarepu','MostrarRepuestoController');
//-----------------------------------------------------------------
});






//leer archivos
Route::get('documento/{archivo}', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/documentos/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
        return response()->file($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});
Route::get('imag/{archivo}', function ($archivo) {
    $public_path = public_path();
    $url = $public_path.'/imagenes/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
        return response()->file($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});



/*
route::get('equipos',function (){
    $equipos= Equipo:: select('equipo.Equipo_ID',
            'equipo.Descripcion AS LEquipo',
        'equipo.Tag',
        'area.Descripcion AS Area',
        'sistema.Descripcion AS Sistema',
        'subsistema.Descripcion AS SubSistema')
        ->join('area','area.Area_ID','=','equipo.area_id')
        ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.sistema_id')
        ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.subsistema_id')->get();
    return Datatables::of($equipos)->make();

});*/

Route::controller('tablaaero', 'tablaAeroenfriador', [
    'anyData'  => 'tablaaero.data',
    'getHasOne'  => 'tablaaero.datas',
    'getIndex' => 'tablaaero',
]);


Route::controller('tablauser', 'tablausuario', [
    'anyData'  => 'tablauser.data',
    'getHasOne'  => 'tablauser.datas',
    'getIndex' => 'tablauser',
]);
Route::controller('tabladoc', 'tabladocumentacion', [
    'anyData'  => 'tabladoc.data',
    'getHasOne'  => 'tabladoc.datas',
    'getIndex' => 'tabladoc',
]);
Route::controller('tablahist', 'tablahistorial', [
    'anyData'  => 'tablahist.data',
    'getHasOne'  => 'tablahist.datas',
    'getIndex' => 'tablahist',
]);
Route::controller('tablaope', 'tablaoperador', [
    'anyData'  => 'tablaope.data',
    'getHasOne'  => 'tablaope.datas',
    'getIndex' => 'tablaope',
]);
Route::controller('tablaequi', 'tablaequipo', [
    'anyData'  => 'tablaequi.data',
    'getHasOne'  => 'tablaequi.datas',
    'getIndex' => 'tablaequi',
]);
Route::controller('tablarepu', 'tablarepuestos', [
    'anyData'  => 'tablarepu.data',
    'getHasOne'  => 'tablarepu.datas',
    'getIndex' => 'tablarepu',
]);


Route::controller('tablaini', 'tablainicio', [
    'anyData'  => 'tablaini.data',
    'getHasOne'  => 'tablaini.datas',
    'getIndex' => 'tablaini',
]);
/*Route::controller('datatables', 'DatatablesController', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);*/

/*route::resource('equiposi','DataEquipoController');


Route::get('datosequipo','EquipoController@getBasicData');*/

//route::get('listall','AreaController@listall');
