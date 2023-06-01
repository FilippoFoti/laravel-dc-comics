<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicsRequest;
use App\Http\Requests\UpdateComicsRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicsRequest $request)
    {
        // $data = $request->all();
        // $comics = new Comic();
        // $comics->fill($data);
        //// $comics->title = $data["title"];
        //// $comics->description = $data["description"];
        //// $comics->thumb = $data["thumb"];
        //// $comics->price = $data["price"];
        //// $comics->series = $data["series"];
        //// $comics->sale_date = $data["sale_date"];
        //// $comics->type = $data["type"];
        // $comics->save();

        // return redirect()->route("comics.index");

        $data = $request->validated();
        $comics = new Comic();
        $comics->fill($data);
        $comics->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);
        return view("comics.show", compact("comics"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::findOrFail($id);
        return view('comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicsRequest $request, $id)
    {
        // $data = $request->all();
        // $comics = Comic::findOrFail($id);
        // $comics->update($data);

        // return redirect()->route('comics.show', $comics->id);

        $data = $request->validated();
        $comics = Comic::findOrFail($id);
        $comics->update($data);

        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::findOrFail($id);
        $comics->delete();

        return redirect()->route('comics.index');
    }
}
