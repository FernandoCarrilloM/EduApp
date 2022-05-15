<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class JuegoController extends Controller
{
    public function index()
    {
        return view('juegos.index');
    }
    public function show()
    {
        $puntos = Auth::user()->puntos;
        $id = Auth::user()->id;
        $usuario = User::findOrFail($id);

        if($usuario){
            $usuario->puntos = $usuario->puntos+10;
            $usuario->save();
        }
        return view('juegos.show');
    }
}
