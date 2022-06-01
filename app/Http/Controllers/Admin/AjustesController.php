<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AjustesController extends Controller
{
    public function index_ajustes (){   
        return view('admin.ajustes.index_ajustes');
        
    }
    public function index_Roles (){   
        return view('admin.ajustes.index_roles');
        
    }
    public function index_Bitacora (){   
        return view('admin.ajustes.index_bitacora');
        
    }
    public function index_Backup (){   
        return view('admin.ajustes.index_backup');
        
    }
}
