<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function index_hogar (){   
        return view('admin.catalogo.index_hogar');
        
    }
    public function index_comerc (){   
        return view('admin.catalogo.index_comercio');
        
    }
    public function index_ofic (){   
        return view('admin.catalogo.index_oficina');
        
    }
}
