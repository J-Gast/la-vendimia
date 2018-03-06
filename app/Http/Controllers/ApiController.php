<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ApiController extends Controller
{
    public function getAllClientes() {
        $auxClientes = Cliente::all();
        return $auxClientes;
    }

    public function getCliente($id) {
        return Cliente::where('idCliente', $id) -> get();
    }
}
