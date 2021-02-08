<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return view('pages.emp-index ', compact('employees'));
    }
    public function show(Employee $employee){              //con (Employee $employee) e passando nella rotta il parametro employee, non serve il findOrFail
        // $employee=Employee::findOrFail($id);
        return view('pages.emp-show', compact('employee'));
    }
}
