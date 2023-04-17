<?php

namespace App\Http\Controllers\Guest;

use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        
        $comics = Comic::all();

        // $data = compact('comics'); funzione php

        return view('comics.index', compact('comics'));
    }

    public function show($comic) {
        // dd($comic);

        $comic = Comic::find($comic);

        return view('comics.show', compact('comic'));
    }

    public function create(){

        return view('comics.create');
    }

    public function store(Request $request){

        $data = $request->all();

        $new_comic = new Comic;

        $new_comic->title = $data['title'];
        $new_comic->description = $data['description'];
        $new_comic->thumb = $data['thumb'];
        $new_comic->price = $data['price'];
        $new_comic->series = $data['series'];
        $new_comic->sale_date = $data['sale_date'];
        $new_comic->type = $data['type'];

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);
    }
}
