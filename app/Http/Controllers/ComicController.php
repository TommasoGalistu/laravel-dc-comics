<?php

namespace App\Http\Controllers;

use App\Function\Helper;

use Illuminate\Http\Request;
use App\Models\Comic;
use PHPUnit\TextUI\Help;
use App\Http\Requests\ComicRequest;

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
    public function store(ComicRequest $request)
    {


        $data = $request->all();
         $new_hero = new Comic();
         $new_hero->slug = Helper::generateSlug($data['title'], Comic::class);
         $new_hero->fill($data);
        //  dump($new_hero);
         $new_hero->save();

         return redirect()->route('comics.show', $new_hero->id)->with('validated', true);

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
    public function update(ComicRequest $request, string $id)
    {
        $data = $request->all();
        $comic = Comic::find($id);


        if($data['title'] === $comic->title){
            $data['slug'] = $comic->slug;
        }else{
            $data['slug'] = Helper::generateSlug($data['title'], Comic::class);
        }

        $comic->update($data);

        return redirect()->route('comics.show', compact('comic'))->with('is_edited', true);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Comic::find($id);
        $data->delete();



        return redirect()->route('comics.index')->with('delete', true);
    }
}
