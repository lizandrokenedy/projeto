<?php

namespace App\Http\Controllers;

use App\Exports\ClienteExport;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class RelatorioController extends Controller
{
    public function exportClientes(Request $request)
    {
        if (!empty($request->nome)) {
            $clientes = Cliente::where("nome_cliente", "LIKE", "%{$request->nome}%")->get();
        } else {
            $clientes = Cliente::all();
        }


        return Excel::download(new ClienteExport($clientes), 'clientes.xlsx');
    }
}
