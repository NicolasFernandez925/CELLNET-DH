<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Orden;

class ExportpdfController extends Controller
{
    public function facturaExportPDF(){

        $userId = auth()->user()->id;
      
        $user = User::with(['domicilio','ordenes'])->where('id',  $userId)->get();

        $domicilioUsuario = $user[0]->domicilio;
        $ordenesUsuario =  $user[0]->ordenes;

        $pdf = \PDF::loadView('factura', compact('domicilioUsuario',  'ordenesUsuario' ));
        return $pdf->setPaper('a4','landscape')->stream('factura.pdf');
    }
}
