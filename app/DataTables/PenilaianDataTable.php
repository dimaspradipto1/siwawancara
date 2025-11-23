<?php

namespace App\DataTables;

use App\Models\Penilaian;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PenilaianDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addIndexColumn()
            ->addColumn('DT_RowIndex', '')

            ->addColumn('kode_pendaftar', function ($query) {
                return $query->mahasiswa->kode_pendaftar ?? '-';
            })

            ->addColumn('mahasiswa', function ($query) {
                return $query->mahasiswa->nama_mahasiswa;
            })
            ->addColumn('action', function ($query) {
                if (auth()->user()->is_admin) {
                    return '
                    <a href="'.route('penilaian.show', $query->id).'" class="btn btn-sm btn-dark text-white px-3" ><i class="fa-solid fa-eye"></i></a>
                    <form action="'.route('penilaian.destroy', $query->id).'" method="POST" style="display: inline">
                        '.csrf_field().'
                        '.method_field('DELETE').'
                        <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confrm(\'Yakin ingin menghapus data ini?\')"><i class="fa-solid fa-trash"></i></button>
                    </form>
                ';
                } else {
                    return '-';
                }
            })
            ->setRowId('id')
            ->rawColumns(['action', 'DT_RowIndex', 'mahasiswa']);
    }

    public function query(Penilaian $model): QueryBuilder
    {
        $query = Penilaian::query()->with('mahasiswa');
        if (auth()->user()->is_admin || auth()->user()->is_timtes) {
            return $query;
        } else {
            return $query->where('user_id', auth()->user()->id);
        }
    }

    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('penilaian-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            // ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    public function getColumns(): array
    {
        return [
            Column::make('DT_RowIndex')
                ->title('NO')
                ->width(60)
                ->addClass('text-center'),

            Column::computed('kode_pendaftar')
                ->title('Kode Pendaftar')
                ->addClass('text-center')
                ->orderable(false)
                ->searchable(false),

            Column::make('mahasiswa')
                ->title('Mahasiswa')
                ->addClass('text-center'),

            Column::make('total_point')
                ->title('Total Point')
                ->addClass('text-center'),

            Column::make('nilai_akhir')
                ->title('Nilai Akhir')
                ->addClass('text-center'),

            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
        ];
    }

    protected function filename(): string
    {
        return 'Penilaian_' . date('YmdHis');
    }
}
