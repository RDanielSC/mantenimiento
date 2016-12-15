<?php

namespace App\DataTables;

use App\Models\Equipo;

use Yajra\Datatables\Services\DataTable;

class EquipoDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            /*->addColumn('action', 'path.to.action.view')*/
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        $equipos = Equipo::select('equipo.Equipo_ID as ID',
            'equipo.Tag as TAG' ,
            'equipo.Descripcion AS Equipo',

            'area.Descripcion AS Area',
            'sistema.Descripcion AS Sistema',
            'subsistema.Descripcion AS Subsistema')
            ->join('area','area.Area_ID','=','equipo.Area_ID')
            ->leftjoin('sistema','sistema.Sistema_ID','=','equipo.Sistema_ID')
            ->leftjoin('subsistema','subsistema.SubSistema_ID','=','equipo.SubSistema_ID');

        return $this->applyScopes($equipos);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns([
                'ID',
                'TAG',
                'Equipo',
                'Area',
                'Sistema',
                'Subsistema',
                'Acción',
            ])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => ['csv', 'excel', 'pdf', 'print', 'reset', 'reload'],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'equipodatatables_' . time();
    }
}
