<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;
use App\Typology;

class MainController extends Controller
{
    public function empIndex(){
        $employees=Employee::all();
        return view('pages.emp-index ', compact('employees'));
    }
    public function empShow(Employee $employee){              //con (Employee $employee) e passando nella rotta il parametro employee, non serve il findOrFail
        // $employee=Employee::findOrFail($id);
        return view('pages.emp-show', compact('employee'));
    }

    public function taskIndex(){
        $tasks=task::all();
        return view('pages.task-index', compact('tasks'));
    }
    public function taskShow($id){
        $task=Task::findOrFail($id);
        return view('pages.task-show', compact('task'));
    }
    
    public function typIndex(){
        $types=Typology::all();
        return view('pages.typ-index', compact('types'));
    }
    public function typShow($id){
        $typ=Typology::findOrFail($id);
        return view('pages.typ-show', compact('typ'));
    }
}
