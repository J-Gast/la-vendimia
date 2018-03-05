<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function  ventasPrincipal() {
        return view('ventasPrincipal');
    }

    public function ventaNueva() {
        return view('ventaNueva');
    }
}
