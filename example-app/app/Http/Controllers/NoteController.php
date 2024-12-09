<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index(){
        $notas = Note::all();
        // dd($notas); //Imprime el array notas
        // return "hola"; //Imprime hola
        // return view('ejemplo'); //Imprime la vista ejemplo
        // return view('prueba', ['mensaje' => 'Kaixo Mundua']); //Imprima le vista ejemplo pasandole una variable
        return view('note.index', compact('notas')); //Imprime la vista index, que se encuentra dentro de la carpeta note. Le pasa el array notas
    }
}
