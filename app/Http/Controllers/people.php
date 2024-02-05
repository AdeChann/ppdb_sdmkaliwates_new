<?php

namespace App\Http\Controllers;

use App\Exports\ExportPeople;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;

class people extends Controller
{
    function index(){
        $datas = Pendaftaran::orderBy('nama_lengkap','asc')->get();
        return view("people.index",["datas"=>$datas]);
    }

    function export_excel(){
        return Excel::download(new ExportPeople,"ppdb sdm kaliwates.xlsx");
    }
}