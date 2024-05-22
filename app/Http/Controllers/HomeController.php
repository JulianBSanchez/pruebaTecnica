<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function home()
    {
        $categorias = Categoria::all();
        return view('home.landing', $categorias );
    }
}
