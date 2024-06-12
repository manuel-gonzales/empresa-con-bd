<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use DB;

class PersonasController extends Controller
{
    public function index(){
        $personas = Persona::latest()->paginate(2);

        return view('personas', compact('personas'));
    }

    public function show($id){
        return view('personas.show', ['persona' => Persona::find($id)]);
    }
}
