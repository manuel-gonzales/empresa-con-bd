<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use App\Http\Requests\CreatePersonaRequest;

class PersonasController extends Controller
{
    public function index(){
        $personas = Persona::latest()->paginate(10);

        return view('personas', compact('personas'));
    }

    public function create(){
        return view('personas.create');
    }

    public function store(CreatePersonaRequest $request){
        $data = $request->validated();

        $data['cPerRnd'] = $this->generateRandomString();

        Persona::create($data);

        return redirect()->route('personas.index');
    }

    private function generateRandomString($length = 10){
        return substr(uniqid(), 0, $length);
    }

    public function show($id){
        return view('personas.show', ['persona' => Persona::find($id)]);
    }
}
