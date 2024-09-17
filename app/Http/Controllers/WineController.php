<?php

namespace App\Http\Controllers;
use App\Models\Wine;
use Illuminate\Http\Request;
use App\Function\Helper;
class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::all();
       return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wine $wine)
    {
        return view('wines.description', compact('wine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wine $wine)
    {
        return view('wines.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wine $wine)
    {
        $data = $request->all();


        if($data['wine'] === $wine->wine){
            $data['slug'] = $wine->slug;
        }else{
            $data['slug'] = Helper::generateSlug($data['wine'], Wine::class);
        }

        $wine->update($data);


        return redirect()->route('wines.show', compact('wine'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wine $wine)
    {

        $wine->delete();


        return redirect()->route('wines.index');


    }
}
