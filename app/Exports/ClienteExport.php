<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ClienteExport implements FromView
{

    private $clientes;

    public function __construct($clientes)
    {
        $this->clientes = $clientes;
    }

    public function view(): View
    {
        return view('relatorio.export', [
            'clientes' => $this->clientes
        ]);
    }
}
