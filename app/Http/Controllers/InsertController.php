<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsertController extends Controller
{

    public function create()
    {
        return view('submit');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*prendo i file che arrivano in post usando il validate lo rendo 
         required e specifico il tipo di file che mi aspetto */
        $request->validate([
            'file' => 'required|mimes:csv,txt'
        ]);
        // con il metodo file e getrealpath 
        // viene restituito un array associativo con i dati della tabella
        $file = file($request->file->getRealPath());
        
        $dati = array_slice($file,1);
        // elimino il primo elemento dellárray che contiene solo il nome della colonna 
        dd($dati);
    }
}
