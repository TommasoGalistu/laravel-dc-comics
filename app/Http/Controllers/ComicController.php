<?php

namespace App\Http\Controllers;

use App\Function\Helper;

use Illuminate\Http\Request;
use App\Models\Comic;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comic::all();

        return view('comic', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();
         $new_hero = new Comic();
         $new_hero->title = $data['title'];
         $new_hero->description = $data['description'];
         $new_hero->thumb = $data['thumb'];
         $new_hero->price = $data['price'];
        //  dump($new_hero);
         $new_hero->save();

         return redirect()->route('comics.index', $new_hero->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Comic::find($id);


        return view('comics.description', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {

        return route('comics.edit', $comic);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
