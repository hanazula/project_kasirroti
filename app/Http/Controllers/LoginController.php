<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function ShowLogin()
    {
        if (Auth::check()) {
            return redirect('/');
        } else {
            return view('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function actionLogin(request $request)
    {
        $data = [
            'email'=> $request->email,
            'password'=> $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect('/')->with(['success' => 'Login Berhasil']);
        } else {
            return redirect('/login')->with(['error' => 'Email dan Password salah!!']);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function actionLogout(Request $request)
    {
        Auth::Logout();
        return redirect('/login')->with(['success' => 'Anda berhasil logout']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
