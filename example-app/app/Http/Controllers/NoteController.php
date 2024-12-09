<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


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

    public function formularioaKargatuNote(){
        return view('note.formulario');
    }
    public function store(Request $request):RedirectResponse{
        $nota = new Note();
        $nota->title=$request->title;
        $nota->description=$request->description;
        $nota->save();
        // Note::create($request->all()); //Otra forma de guardarlo
        return redirect()->route('note.index');
    }
    public function edit(Note $note):View{

        return view ('note.edit', compact('note'));
    }

    // Otra forma
    // public function edit($id):View{
    //     $note = Note::find($id);
    //     return view ('note.edit', compact('note'));
    // }
}
