<?php

// app/Http/Controllers/BancaController.php

namespace App\Http\Controllers;

use App\Exports\BancaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Banca;

class BancaController extends Controller
{
    public function exportBanca($bancaId)
    {
        // Aqui você gera o arquivo Excel
        return Excel::download(new BancaExport($bancaId), 'banca-notas.xlsx');
    }
}
