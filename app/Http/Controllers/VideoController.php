<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::paginate(4);
        return view('videos.index',compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(Request $request)
    {
        //Método para agregar registros
        $video = new Video();

        $video->nombre = $request->nombre;
        $video->duracion = $request->duracion;
        $video->materia = $request->materia;
        $video->autor = $request->autor;

        //Guardar ruta de imagen en BD 
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = 'images/featureds/'; //asignamos la carpeta 
            $filename = time().'-'.$file->getClientOriginalName(); //recuperar el nombre original del archivo
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename); //la imagen cargada la movemos a la carpeta y guardamos la url en la DB
            $video->foto = $destinationPath . $filename;
        }

        $video->save();

        return redirect()->back();
    }
}
