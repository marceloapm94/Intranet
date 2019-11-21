<?php

namespace App\Http\Controllers\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Permiso;
class PermisoController extends Controller
{
     
    
    public function index()
    {
        $permisos = Permiso::orderBy('id')->get();
        return view('admin.permiso.index', compact('permisos'));
    }

    
    public function crear()
    {
        return view('admin.permiso.crear');
    }
   
    public function guardar(Request $request)
    {
        //
    }

   
    public function mostrar($id)
    {
        //
    }

 
    public function editar($id)
    {
        //
    }

   
    public function actualizar(Request $request, $id)
    {
        //
    }

    public function eliminar($id)
    {
        //
    }
}