<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UserDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('DT_RowIndex', '')
            ->addColumn('role_status', function ($user) {
                $status = '';
    
                if ($user->is_admin) {
                    $status .= '<span class="badge bg-primary">Admin</span> ';
                }
    
                if ($user->is_interviewer) {
                    $status .= '<span class="badge bg-info">Interviewer</span> ';
                }
    
                if ($user->is_timtes) {
                    $status .= '<span class="badge bg-warning">Tim Tes</span> ';
                }
    
                if (!$user->is_admin && !$user->is_interviewer && !$user->is_timtes) {
                    $status .= '<span class="badge bg-secondary">Non-Role</span>';
                }
    
                return $status;
            })
            ->addColumn('action', function($user){
                return '
                    <a href="'.route('user.updatePassword', $user->id).'" class="btn btn-sm btn-info text-white px-3 "><i class="fa-solid fa-key"></i></a>
                    <a href="'.route('user.edit', $user->id).'" class="btn btn-sm btn-warning text-white px-3" ><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="'.route('user.destroy', $user->id).'" method="POST" style="display: inline">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confrm(\'Yakin ingin menghapus data ini?\')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                ';
            })
            ->setRowId('DT_RowIndex')
            ->rawColumns(['action', 'role_status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('user-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
           
            Column::make('DT_RowIndex')
                ->title('NO')
                ->width(60)
                ->addClass('text-center'),
            Column::make('name')->title('Nama'),
            Column::make('email')->title('Email'),
            Column::computed('role_status')
                ->title('Status')
                ->addClass('text-center'),
            Column::computed('action')->title('Aksi')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'User_' . date('YmdHis');
    }
}
