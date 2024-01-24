<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Cast extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public static function getCast(){
        $cast = DB::table('casts')->get();
        return $cast;
    }
    public static function storeCast(){
        $nama = request()->name_cast;
        $umur = request()->age_cast;
        $bio = request()->bio_cast;

        DB::table('casts')->insert([
            ['nama' => $nama, 'umur' => $umur, 'bio' => $bio]
        ]);
    }
    public static function updateCast($cast_id){
        $nama = request()->name_cast;
        $umur = request()->age_cast;
        $bio = request()->bio_cast;

        DB::table('casts')
          ->where('id', $cast_id)
          ->update(['nama' => $nama,'umur' => $umur, 'bio' => $bio]);
    }
    public static function destroyCast($cast_id){
        DB::table('casts')->where('id', $cast_id)->delete();
    }
}
