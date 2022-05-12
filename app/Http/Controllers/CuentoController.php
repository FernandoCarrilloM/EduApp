<?php

namespace App\Http\Controllers;

use App\Models\Cuento;
use Illuminate\Http\Request;

class CuentoController extends Controller
{
    public function index()
    {
        $cuentos = Cuento::paginate(4);
        return view('cuentos.index',compact('cuentos'));
    }

    public function create()
    {
        return view('cuentos.create');
    }

    public function store(Request $request)
    {
        //Método para agregar registros
        $cuento = new Cuento();

        $cuento->nombre = $request->nombre;
        $cuento->genero = $request->genero;
        $cuento->paginas = $request->paginas;
        $cuento->autor = $request->autor;

        //Guardar ruta de imagen en BD 
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = 'images/featureds/'; //asignamos la carpeta 
            $filename = time().'-'.$file->getClientOriginalName(); //recuperar el nombre original del archivo
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename); //la imagen cargada la movemos a la carpeta y guardamos la url en la DB
            $cuento->foto = $destinationPath . $filename;
        }

        $cuento->save();

        return redirect()->back();
    }
   
}
