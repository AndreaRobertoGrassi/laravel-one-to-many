<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
