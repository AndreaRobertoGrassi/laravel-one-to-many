<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class MainController extends Controller
{
    public function index(){
        $employees=Employee::all();
        return view('pages.home', compact('employees'));
    }
}
