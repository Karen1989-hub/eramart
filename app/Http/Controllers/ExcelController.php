<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marzik;
use App\Exports\MarziksExport;
use Maatwebsite\Excel\Facades\Excel;


class ExcelController extends Controller
{
    public function createMarziksExel(){
        return Excel::download(new MarziksExport, 'spotsmens.xlsx');
    }



}
