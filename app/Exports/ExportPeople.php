<?php

namespace App\Exports;

use App\Models\Pendaftaran;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportPeople implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $datas = Pendaftaran::orderBy('nama_lengkap','asc')->get();
        return view('people.table',['datas' => $datas]);

    }
}