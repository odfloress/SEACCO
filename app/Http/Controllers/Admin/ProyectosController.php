<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function index_Pactuales (){   
        return view('admin.proyectos.index_Pactuales');
        
    }
    public function index_Sempl (){   
        return view('admin.proyectos.index_Sempl');
        
    }
    public function index_Cot (){   
        return view('admin.proyectos.index_cot');
        
    }
    
}
