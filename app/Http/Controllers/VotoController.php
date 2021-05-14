<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VotoController extends Controller
{
    public function index() {
        return view('votos.index');
    }

    public function create() {
        return view('votos.create');
    }
    public function show() {
        return view('votos.show');
    }
}