<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Browsershot\Browsershot;
use Illuminate\Support\Facades\File;

class ConceptoController extends Controller
{
    public function index(Request $request){                
       
        try {
            $url =  $request->url;
            $componentes = parse_url($url);
            $nombreDominio = $componentes['host'];
            $nombre = $nombreDominio.'.png';
                // Utiliza Browsershot para capturar la página web
            Browsershot::url($url)
            ->save('files/'.$nombre); // Guarda la captura de pantalla en el directorio publico   
            return view('captura/captura');      
        } catch (\Throwable $th) {
          dd($th);
        }        
    }

    public function captura(){
        return view('captura/captura');
    }

    public function listar(){
      
        $files = File::allFiles(public_path('files'));
        $archivos = [];
        foreach ($files as $file) {        
            $archivos[] =$file->getFilename();
        }    
        return view('captura/vista', compact('archivos'));      
    }
}
