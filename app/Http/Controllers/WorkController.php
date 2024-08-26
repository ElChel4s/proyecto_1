<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('works.index', compact('works'));
    }

    public function show($id)
    {
        $work = Work::findOrFail($id);
        return view('works.show', compact('work'));
    }

    public function create()
    {
        return view('works.create');
    }

    public function store(Request $request)
    {
        Work::create($request->all());
        return redirect()->route('works.index');
    }

    public function edit($id)
    {
        $work = Work::findOrFail($id);
        return view('works.edit', compact('work'));
    }

    public function update(Request $request, $id)
    {
        $work = Work::findOrFail($id);
        $work->update($request->all());
        return redirect()->route('works.index');
    }

    public function destroy($id)
    {
        Work::destroy($id);
        return redirect()->route('works.index');
    }
}
