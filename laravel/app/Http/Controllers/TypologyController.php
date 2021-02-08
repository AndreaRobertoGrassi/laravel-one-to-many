<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $tasks = Task::findOrFail($data['tasks']);
        $typ=Typology::create($data);
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
        // dd($data);
        $tasks = Task::findOrFail($data['tasks']);
        $typ = Typology::findOrFail($id);
        $typ -> update($data);
        $typ -> tasks() -> associate($tasks);
        $typ -> save();
        $typ -> tasks() -> sync($tasks);
        return redirect() -> route('tasks.show', compact('typ'));
    }
}
