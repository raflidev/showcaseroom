<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/')->with('success', 'Login Berhasil');
        }

        return back()->withErrors([
            'wrong' => 'Username atau password anda salah',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
            'repassword' => 'required|same:password',
        ]);

        User::create([
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'password' => bcrypt($request->password),
            'name' => $request->nama,
        ]);

        return redirect('/login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'password' => 'required',
            'repassword' => 'required|same:password',
        ]);
        if (Hash::check($request->password, Auth::user()->password)) {
            User::where('id', Auth::user()->id)->update([
                'email' => $request->email,
                'no_hp' => $request->no_hp,
                'password' => bcrypt($request->password),
                'name' => $request->nama,
            ]);

            return redirect('/')->with('success', 'Data berhasil diubah');
        } else {
            return back()->withErrors([
                'wrong' => 'Password anda salah',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil Logout');
    }
}
