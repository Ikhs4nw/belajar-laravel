<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cast = Cast::all();
        return view('cast', ['title' => 'Data Cast'], ['cast' => $cast]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cast = new Cast;
        $cast->nama = $request->input('name_cast');
        $cast->umur = $request->input('age_cast');
        $cast->bio = $request->input('bio_cast');
        $cast->save();
        return redirect('/cast')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        $cast->update([
            'nama'     => $request->name_cast,
            'umur'   => $request->age_cast,
            'bio'   => $request->bio_cast
        ]);
        return redirect('/cast')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cast_id)
    {
        $query = Cast::findOrFail($cast_id)->delete();
        return redirect('/cast')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
