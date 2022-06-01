<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index_admin (){   
        return view('admin.personas.index_admin');
        
    }
    public function index_clien (){   
        return view('admin.personas.index_clientes');
        
    }

    public function index_emplea (){   
        return view('admin.personas.index_empleados');
        
    }
    public function index_provee (){   
        return view('admin.personas.index_proveedores');
        
    }
}
