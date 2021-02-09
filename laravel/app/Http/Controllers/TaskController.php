<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Employee;
use App\Task;
use App\Typology;

class TaskController extends Controller
{
     public function index(){
        $tasks=task::all();
        return view('pages.task-index', compact('tasks'));
    }

    public function show($id){
        $task=Task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }

    public function create(){
        $employees=Employee::all();
        $typologies = Typology::all();
        return view('pages.task-create', compact('employees', 'typologies'));
    }

    public function store(Request $request){
        $data = $request -> all();
        
         Validator::make($data,[          //validazione
            'title'=>'required',
            'description'=>'required',
            'priority'=>'required|integer|min:1|max:5'
        ])-> validate();

        $task = Task::make($request -> all());      
        $employee = Employee::findOrFail($data['employee_id']);  
        $task -> employee() -> associate($employee);
        $task -> save();

        if (array_key_exists('typs', $data)) {
            $typs = Typology::findOrFail($data['typologies']);
        }else {
            $typs=[];
        }
        
        $task -> typologies() -> attach($typs);

        return redirect()-> route('tasks.show', compact('task'));
    }

    public function edit($id) {
        $employees = Employee::all();
        $typologies = Typology::all();
        $task = Task::findOrFail($id);
        return view('pages.task-edit', compact('employees', 'typologies', 'task'));
    }

    public function update(Request $request, $id) {
        $data = $request -> all();

         Validator::make($data,[          //validazione
            'title'=>'required',
            'description'=>'required',
            'priority'=>'required|integer|min:1|max:5'
        ])-> validate();

        $emp = Employee::findOrFail($data['employee_id']);
        $task = Task::findOrFail($id);
        $task -> employee() -> associate($emp);
        $task -> update($data);
        // $task -> save();    non serve 
        if (array_key_exists('typs', $data)) {
            $typs = Typology::findOrFail($data['typologies']);
        }else {
            $typs=[];
        }
        
        $task -> typologies() -> sync($typs);
        
        return redirect() -> route('tasks.show', compact('task'));
    }
}
