<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

//return type View
use Illuminate\View\View;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $cast = Cast::all();
        $data_cast = Cast::getCast();
        return view('cast.vindex', ['title' => 'Data Cast'], compact('data_cast'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        // $cast = new Cast;
        // $cast->nama = $request->input('name_cast');
        // $cast->umur = $request->input('age_cast');
        // $cast->bio = $request->input('bio_cast');
        // $cast->save();

        Cast::storeCast();
        return redirect('/cast')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($cast_id)
    {
        // $cast = Cast::findOrFail($cast_id);
        // $cast->update([
        //     'nama'     => $request->name_cast,
        //     'umur'   => $request->age_cast,
        //     'bio'   => $request->bio_cast
        // ]);
        Cast::updateCast($cast_id);
        return redirect('/cast')->with(['success' => 'Data Berhasil Diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cast_id)
    {
        // Cast::findOrFail($cast_id)->delete();

        Cast::destroyCast($cast_id);
        return redirect('/cast')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
