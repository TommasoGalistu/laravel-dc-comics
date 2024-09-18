<?php

namespace App\Http\Controllers;

use App\Function\Helper;

use Illuminate\Http\Request;
use App\Models\Comic;
use PHPUnit\TextUI\Help;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comic::all();

        return view('comics.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3',
            'thumb' => 'required|min:3|max:500',
            'price' => 'required|min:1|',

        ],[
            'title.required' => 'Il titolo è un valore obbligatorio',
            'title.min' => 'Il titolo deve essere di almeno :min caratteri',
            'title.max' => 'Il titolo deve essere di massimo :max caratteri',
            'description.required' => 'La descrizione è un valore obbligatorio',
            'description.min' => 'La descrizione deve essere di almeno :min caratteri',
            'thumb.required' => "L'url è un valore obbligatorio",
            'thumb.min' => "L'url deve essere di almeno :min caratteri",
            'thumb.max' => "L'url deve essere massimo di :max caratteri",
            'price.required' => "Il prezzo è un valore obbligatorio",
            'price.min' => "Manca il prezzo o la valuta",
        ]);
        $data = $request->all();
         $new_hero = new Comic();
         $new_hero->slug = Helper::generateSlug($data['title'], Comic::class);
         $new_hero->fill($data);
        //  dump($new_hero);
         $new_hero->save();

         return redirect()->route('comics.show', $new_hero->id)->with('validated');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Comic::find($id);


        return view('comics.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $comic = Comic::find($id);


        if($data['title'] === $comic->title){
            $data['slug'] = $comic->slug;
        }else{
            $data['slug'] = Helper::generateSlug($data['title'], Comic::class);
        }

        $comic->update($data);

        return redirect()->route('comics.show', compact('comic'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Comic::find($id);
        $data->delete();



        return redirect()->route('comics.index');
    }
}
