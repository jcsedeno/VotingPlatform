<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GestionController extends Controller
{
    public function index() {
        return view('gestiones.index');
    }
    public function create() {
        return view('gestiones.create');
    }
    public function show() {
        return view('gestiones.show');
    }
}
