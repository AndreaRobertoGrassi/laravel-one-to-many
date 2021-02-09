<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Task;
use App\Typology;

class TypologyController extends Controller
{
    public function index(){
        $types=Typology::all();
        return view('pages.typ-index', compact('types'));
    }

    public function show($id){
        $typ=Typology::findOrFail($id);
        return view('pages.typ-show', compact('typ'));
    }

    public function create(){
        $tasks = Task::all();
        return view('pages.typ-create', compact('tasks'));
    }

    public function store(Request $request){
        $data = $request -> all();
        $typ=Typology::create($data);
        $tasks = Task::findOrFail($data['tasks']);
        $typ -> tasks() -> attach($tasks);       
        return redirect()-> route('typologies.show', $typ-> id);
    }

    public function edit($id) {
        $tasks = Task::all();
        $typ = Typology::findOrFail($id);
        return view('pages.typ-edit', compact('tasks', 'typ'));
    }

    public function update(Request $request, $id) {
        $data = $request -> all();

        Validator::make($data,[          //validazione
            'name'=>'required',
        ])-> validate();

        $typ = Typology::findOrFail($id);
        $typ -> update($data);
        // $typ -> save();    non serve
        if (array_key_exists('tasks', $data)) {
            $tasks = Task::findOrFail($data['tasks']);
        }else {
            $tasks=[];
        }
        $typ -> tasks() -> sync($tasks);  //agisce solo in caso di modifica mentre l'attach aggiunge ciò che è selezionato
        
        return redirect() -> route('typologies.show', $typ-> id);
    }
}
