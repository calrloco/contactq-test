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

    }

   
}
