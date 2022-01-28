<?php

namespace App\Exports;

use App\Models\marzik;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class MarziksExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exportExcel.marziks', [
            'marziks' => marzik::all()
        ]);
    }
}
