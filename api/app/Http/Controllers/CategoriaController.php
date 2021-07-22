<?php

namespace App\Http\Controllers;

use App\Models\Categoria;

class CategoriaController
{
    public function index(){
        return Categoria::all();
    }
}
