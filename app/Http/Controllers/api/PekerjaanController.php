<?php

namespace App\Http\Controllers\api;

use App\Pekerjaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\DB;

use App\Mahasiswa;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user = $request->user();
        $uid = $user->no_identitas;
        // dd($uid);
        $mhs = Mahasiswa::select('select * from profil_mhs where no_identitas = ?', $uid);
        // $wid = [$work->id];
        dd($mhs);
        return response()->json($mhs,200);
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
        $work = new Pekerjaan;
        $work->tempat_kerja = $request->nama_tempat;
        $work->alamat_kerja = $request->alamat_kerja;

        $user = $request->user();
        $uid = [$user->no_identitas];
        $mhs = DB::select('select * from profil_mhs where no_identitas = ?', $uid);
        // dd($mhs);
        $mid = $mhs[0]->id;
        // dd($mid);

        $work->save();

        // $id = App\Mahasiswa::find(3)->id;
        

        $work->mahasiswa()->attach($mid);

        return response()->json($work,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $pekerjaan = Pekerjaan::find($id);
        $work = $pekerjaan->mahasiswa;
        // dd($work);
        return response()->json($pekerjaan, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        //
    }
}
