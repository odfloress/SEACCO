<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index_categoria (){   
        return view('admin.inventario.index_categoria');
        
    }
    
    public function index_maquinaria_equipo (){   
        return view('admin.inventario.index_maquinaria');
        
    }
}
