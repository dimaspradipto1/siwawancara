<?php

namespace App\DataTables;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class MahasiswaDataTable extends DataTable
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
            ->addColumn('checkbox', function ($row) {
                return '<input type="checkbox" class="row-checkbox" value="' . $row->id . '">';
            })
            ->addColumn('action', function ($query) {
                return '
                    <a href="' . route('mahasiswa.show', $query->id) . '" class="btn btn-sm btn-dark text-white px-3" ><i class="fa-solid fa-eye"></i></a>
                    <a href="' . route('mahasiswa.edit', $query->id) . '" class="btn btn-sm btn-warning text-white px-3" ><i class="fa-solid fa-pen-to-square"></i></a>
                    <form action="' . route('mahasiswa.destroy', $query->id) . '" method="POST" style="display: inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confrm(\'Yakin ingin menghapus data ini?\')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                ';
            })
            ->setRowId('DT_RowIndex')
            ->rawColumns(['action', 'DT_RowIndex', 'checkbox']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Mahasiswa $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('mahasiswa-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->scrollX(true)
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ])
            ->parameters([
                'processing' => true,
                'language' => [
                    'processing' => '<div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div>',
                    'loadingRecords' => 'Memuat data...',
                    'zeroRecords' => 'Tidak ada data yang ditemukan',
                    'emptyTable' => 'Tidak ada data tersedia',
                    'info' => 'Menampilkan _START_ sampai _END_ dari _TOTAL_ data',
                    'infoEmpty' => 'Menampilkan 0 sampai 0 dari 0 data',
                    'infoFiltered' => '(disaring dari _MAX_ total data)',
                    'search' => 'Cari:',
                    'paginate' => [
                        'first' => '<i class="fas fa-angle-double-left"></i>',
                        'last' => '<i class="fas fa-angle-double-right"></i>',
                        'next' => '<i class="fas fa-angle-right"></i>',
                        'previous' => '<i class="fas fa-angle-left"></i>'
                    ],
                    'lengthMenu' => 'Tampilkan _MENU_ data per halaman',
                ]
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('checkbox')
                ->title('<input type="checkbox" id="select-all">')
                ->exportable(false)
                ->printable(false)
                ->width(20)
                ->addClass('text-center'),
            Column::make('DT_RowIndex')
                ->title('NO')
                ->width(60)
                ->addClass('text-center'),
            Column::make('kode_pendaftar')
                ->title('Kode Pendaftar')
                ->addClass('text-center'),
            Column::make('nama_mahasiswa')
                ->title('Nama Mahasiswa'),
            Column::make('jalur_pendaftar')
                ->title('Jalur Pendaftar')
                ->addClass('text-center'),
            Column::make('sistem_kuliah')
                ->title('Sistem Kuliah')
                ->addClass('text-center'),
            Column::computed('action')
                ->title('Aksi')
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
        return 'Mahasiswa_' . date('YmdHis');
    }
}
