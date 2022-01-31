<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function home(){

        $comics = Comic::All();

        return view('pages.home', compact('comics'));
    }

    public function show($id){ 
        
        $comic = Comic::findOrFail($id);
        // dd($id);
        return view('pages.show', compact('comic'));
        
    }
    public function create(){

        
        return view('pages.create');
    }

    public function store( Request $request){
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => '',
        ]);

        $comic = Comic::create($data);

        // return redirect() -> route('home');
        return redirect() -> route('home');
    }

    public function edit($id){

        $comic = Comic::findOrFail($id);
        return view('pages.edit', compact('comic'));
    }
    public function update(Request $request, $id){
        $data = $request -> validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'release_date' => 'required|date',
            'pages' => ''
        ]);

        $comic = Comic::findOrFail($id);
        $comic -> update($data);

        return redirect() -> route('home');
    }
    public function delete($id){
        $comic = Comic::findOrFail($id);

        $comic -> delete($id);

        return redirect() -> route('home');
    }
}

