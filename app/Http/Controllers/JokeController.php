<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joke;
class JokeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $jokes = Joke::all();
           /*  dump($jokes); */
    
            return view('jokes.index', compact('jokes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('jokes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        dump($data);

        $new_joke = new Joke();

        $new_joke->fill($data);

        $new_joke->save();

        return redirect()->route('jokes.index', $new_joke->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jokes = Joke::find($id);
       /*  dump($jokes); */

        if($jokes) {
            return view('jokes.show', compact('jokes'));
        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jokes = Joke::find($id); 

        // passaggio alla form
        if($jokes) {
            return view('jokes.edit', compact('jokes'));
        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // 1. OTTENERE IL RECORD DA AGGIORNARE
         $jokes = Joke::find($id); 

        //2. AGGIORNARE LE COLONNE
        $jokes->update($data);

        // redirect

        return redirect()->route('jokes.index', $jokes->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jokes = Joke::find($id);

        $jokes->delete();

        return redirect()->route('jokes.index')->with('deleted jokes number', $jokes->id);
    }
}
