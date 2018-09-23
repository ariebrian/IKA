<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Mahasiswa;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
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
        //
        $mahasiswa = new Mahasiswa;

        $mahasiswa->id_npm = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->bd = $request->tgl;
        $mahasiswa->alamat_h = $request->alamat;
        $mahasiswa->angkatan = $request->angkatan;
        $mahasiswa->peminatan = $request->peminatan;
        $mahasiswa->thn_lulus = $request->thn_lulus;
        $mahasiswa->jdl_skripsi = $request->skripsi;
        $mahasiswa->email = $request->email;
        $mahasiswa->no_wa = $request->wa;
        $mahasiswa->link_edin = $request->linked_in;

        $mahasiswa->save();

        return response()->json($mahasiswa, 201);

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
     * Display all result from table mahasiswa.
     * 
     * @return \Illuminate\Http\Response
     * 
     */
    public function all()
    {
        $query = DB::table('profil_mhs')->get();
        return response()->json($query,200);
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
        //
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
}
