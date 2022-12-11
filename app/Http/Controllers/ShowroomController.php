<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ShowroomController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'mobil' => 'required',
            'pemilik' => 'required',
            'merk' => 'required',
            'tanggal_beli' => 'required',
            'deskripsi' => 'required',
            'status_pembayaran' => 'required',
            'Foto' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('Foto');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        Showroom::create([
            'user_id' => Auth::user()->id,
            'name' => $request->mobil,
            'owner' => $request->pemilik,
            'brand' => $request->merk,
            'purchase_date' => $request->tanggal_beli,
            'description' => $request->deskripsi,
            'images' => $filename,
            'status' => $request->status_pembayaran,
        ]);




        return redirect('/')->with('success', 'Berhasil menambahkan mobil');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mobil' => 'required',
            'pemilik_mobil' => 'required',
            'merk_mobil' => 'required',
            'tanggal_beli' => 'required',
            'deskripsi' => 'required',
            'status_pembayaran' => 'required',
            'Foto' => 'mimes:jpeg,png,jpg',
        ]);

        $file = $request->file('Foto');
        $filename = uniqid() . "_" . $file->getClientOriginalName();
        $file->storeAs('public/', $filename);

        $showroom = Showroom::find($id);
        unlink("storage/$showroom->images");
        $showroom->update([
            'name' => $request->nama_mobil,
            'owner' => $request->pemilik_mobil,
            'brand' => $request->merk_mobil,
            'purchase_date' => $request->tanggal_beli,
            'description' => $request->deskripsi,
            'images' => $filename,
            'status' => $request->status_pembayaran,
        ]);
        return redirect('/mycar')->with('success', 'Mobil berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $showroom = Showroom::find($id);
        unlink("storage/$showroom->images");
        $showroom->delete();
        return redirect('/mycar')->with('success', 'Mobil berhasil dihapus');
    }
}
