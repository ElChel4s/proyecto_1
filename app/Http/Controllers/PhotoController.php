<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::all();
        return view('photos.index', compact('photos'));
    }

    public function show($id)
    {
        $photo = Photo::findOrFail($id);
        return view('photos.show', compact('photo'));
    }

    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        Photo::create($request->all());
        return redirect()->route('photos.index');
    }

    public function edit($id)
    {
        $photo = Photo::findOrFail($id);
        return view('photos.edit', compact('photo'));
    }

    public function update(Request $request, $id)
    {
        $photo = Photo::findOrFail($id);
        $photo->update($request->all());
        return redirect()->route('photos.index');
    }

    public function destroy($id)
    {
        Photo::destroy($id);
        return redirect()->route('photos.index');
    }
}
