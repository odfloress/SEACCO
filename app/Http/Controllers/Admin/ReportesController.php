<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\inventario;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\proyectos;
use Yajra\DataTables\DataTables; //Lo importamos 

class ReportesController extends Controller
{
  //Funcion para reporte personas 
    public function index_Person (Request $request) //Dttable personas
    {
      $users= User::select('users.*');

      if ($request->ajax()) 
      { 
        return DataTables::of($users)
          
          // ->filter(function($query) use ($request)
          //       {
          //         if (!empty($request->get('start_date')) && !empty($request->get('end_date'))) 
          //         {         
          //           $query->where('created_at', '>=', $request->get('start_date'))
          //                 ->where('created_at', '<=', $request->get('end_date'));
          //         }
              
          //       })

        ->make(true); //Esto estaba arriba   
      }
       return view('Admin.reportes.index_person');

    }  
      
    //Funcion para reporte inventario
      public function index_Inv (Request $request)
      {   
        
        if ($request->ajax()) 
        { 
          $inv= inventario::join('proyectos','inventarios.id','=', 'proyectos.id')
            ->select ('inventarios.id',
                      'inventarios.item',
                      'inventarios.type',
                      'inventarios.name',
                      'inventarios.status_item',
                      'inventarios.warranty',
                      'inventarios.status_name',
                      'proyectos.name As project_id',
                      'inventarios.price',
            );
          
          return DataTables::of($inv)->make(true);
          
        }
        
        return view('Admin.reportes.index_inv');
        
      }

        //Funcion para reporte Proyectos
        public function index_Proj (Request $request)
        {  
          $proyectos= proyectos::join('users','proyectos.id','=', 'users.id')
            ->select ('proyectos.id',
                      'proyectos.name',
                      'proyectos.start_date',
                      'proyectos.end_date',
                      'proyectos.status_id',
                      'users.name AS user_id');
          
          if ($request->ajax()) 
          { 
              return DataTables::of($proyectos)
                // Toma valores de los filtros
                //  ->filter(function($query) use ($request){
              
                //   if (!empty($request->get('start_date')) && !empty($request->get('end_date'))) {
                //  $query->where('start_date', '>=', $request->get('start_date'))
                //        ->where('end_date', '<=', $request->get('end_date'));
                //  }
            
                //  })
              
              ->make(true);            
          }

          return view('Admin.reportes.index_proj');
        }
}
