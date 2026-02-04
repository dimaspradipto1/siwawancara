<?php

namespace App\DataTables;

use App\Models\Penilaian;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class PenilaianDataTable extends DataTable
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
            ->addColumn('DT_RowIndex', '') // Index kolom
            ->addColumn('kode_pendaftar', function ($query) {
                return $query->mahasiswa->kode_pendaftar ?? '-';
            })
            ->addColumn('interviewer', function ($query) {
                return $query->user ? $query->user->name : 'N/A';
            })
            ->addColumn('mahasiswa', function ($query) {
                return $query->mahasiswa->nama_mahasiswa;
            })
            ->addColumn('action', function ($query) {
                if (auth()->user()->is_admin) {
                    return '
                    <a href="' . route('penilaian.show', $query->id) . '" class="btn btn-sm btn-dark text-white px-3" ><i class="fas fa-eye"></i></a>
                    <form action="' . route('penilaian.destroy', $query->id) . '" method="POST" style="display: inline">
                        ' . csrf_field() . '
                        ' . method_field('DELETE') . '
                        <button type="submit" class="btn btn-sm btn-danger px-3" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"><i class="fas fa-trash"></i></button>
                    </form>
                ';
                } else {
                    return '-';
                }
            })
            ->setRowId('id')
            ->rawColumns(['action', 'DT_RowIndex', 'mahasiswa', 'interviewer'])

            // Filter pencarian kolom relasi kode_pendaftar dan mahasiswa
            ->filterColumn('kode_pendaftar', function ($query, $keyword) {
                $query->whereHas('mahasiswa', function ($subQuery) use ($keyword) {
                    $subQuery->where('kode_pendaftar', 'like', "%{$keyword}%");
                });
            })
            // Menangani pencarian pada kolom mahasiswa
            ->filterColumn('mahasiswa', function ($query, $keyword) {
                $query->whereHas('mahasiswa', function ($subQuery) use ($keyword) {
                    $subQuery->where('nama_mahasiswa', 'like', "%{$keyword}%");
                });
            })
            // Menangani pencarian pada kolom interviewer
            ->filterColumn('interviewer', function ($query, $keyword) {
                $query->whereHas('user', function ($subQuery) use ($keyword) {
                    $subQuery->where('name', 'like', "%{$keyword}%");
                });
            });
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Penilaian $model): QueryBuilder
    {
        $query = $model->newQuery();

        // Jika user adalah interviewer, tampilkan hanya data miliknya
        // Jika user adalah admin, tampilkan semua data
        if (Auth::user()->is_interviewer && !Auth::user()->is_admin) {
            $query->where('user_id', Auth::user()->id);
        }

        return $query;
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('penilaian-table')
            ->columns($this->getColumns())
            ->minifiedAjax(route('penilaian.index'))
            ->orderBy(1)
            ->selectStyleSingle()
            ->scrollX(true)
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        $columns = [
            Column::make('DT_RowIndex')
                ->title('NO')
                ->width(60)
                ->addClass('text-center'),
        ];

        if (auth()->user()->is_admin) {
            $columns[] = Column::computed('interviewer')
                ->title('Nama Interviewer')
                ->addClass('text-start')
                ->orderable(false)
                ->searchable(true);
        }

        $columns = array_merge($columns, [
            Column::computed('kode_pendaftar')
                ->title('Kode Pendaftar')
                ->addClass('text-center')
                ->orderable(false)
                ->searchable(true),
            Column::make('mahasiswa')
                ->title('Mahasiswa')
                ->addClass('text-start')
                ->searchable(true),
            Column::make('total_point')
                ->title('Total Point')
                ->addClass('text-center')
                ->searchable(false),
            Column::make('nilai_akhir')
                ->title('Nilai Akhir')
                ->addClass('text-center')
                ->searchable(false),
        ]);

        // Tambahkan kolom action hanya untuk admin
        if (auth()->user()->is_admin) {
            $columns[] = Column::computed('action')
                ->title('Aksi')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center');
        }

        return $columns;
    }

    protected function filename(): string
    {
        return 'Penilaian_' . date('YmdHis');
    }
}
