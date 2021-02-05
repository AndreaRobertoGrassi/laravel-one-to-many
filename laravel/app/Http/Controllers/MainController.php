<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Task;

class MainController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return view('pages.emp-index ', compact('employees'));
    }
    public function show($id){
        $employee=Employee::findOrFail($id);
        return view('pages.emp-show', compact('employee'));
    }
}
