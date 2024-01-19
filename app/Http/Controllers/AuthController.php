<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function welcome()
    {
        return view('welcome', [
            'title' => 'Welcome'
        ]);
    }

    public function table()
    {
        return view(
            'table',
            [
                'title' => 'Halaman Table'
            ]
        );
    }

    public function data_table()
    {
        return view(
            'data-tables',
            [
                'title' => 'Halaman Data Table'
            ]
        );
    }

    public function postData(Request $request)
    {
        $data = [
            'nama_depan' => $request->input('First_Name'),
            'nama_belakang' => $request->input('Last_Name'),
            'gender' => $request->input('Gender'),
            'kenegaraan' => $request->input('kenegaraan'),
            'bahasa' => $request->input('Bahasa'),
            'bio' => $request->input('bio')
        ];

        return view('welcome', ['data' => $data], ['title' => 'Welcome']);
    }
}
