<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario; 

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    /*public function show($email){
        return Usuario::find($email);
    }*/

    public function store(Request $request){
        $usuario = Usuario::create($request->all());
        return response()->json($usuario, 201);
    }

    public function update(Request $request, $id){
       $usuario = Usuario::findOrFail($id);
       $usuario->update($request->all());
       return response()->json($usuario, 200);
    }

    public function delete(Request $request, $id){
        $usuario = Usuario::findOrFail($id);
        $usuario->delete($request->all());
        return 204;
     }
}
