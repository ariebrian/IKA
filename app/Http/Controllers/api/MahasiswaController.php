<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        // $user = auth()->user();
        dd($user);
        print_r($user);
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

        $mahasiswa->no_identitas = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->mhs_tgl_lahir = $request->tgl;
        $mahasiswa->mhs_alamat_rmh = $request->alamat;
        $mahasiswa->mhs_angkatan = $request->angkatan;
        $mahasiswa->mhs_peminatan = $request->peminatan;
        $mahasiswa->mhs_thn_lulus = $request->thn_lulus;
        $mahasiswa->mhs_skripsi = $request->skripsi;
        $mahasiswa->email = $request->email;
        $mahasiswa->mhs_no_wa = $request->wa;
        $mahasiswa->mhs_linkedin = $request->linked_in;

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
        $mahasiswa = Mahasiswa::find($id);
        $mhs = $mahasiswa->pekerjaan;
        $result =[
            'mahasiswa' =>$mahasiswa,
            'pekerjaan' => $mhs,
        ];
        // dd($result);

        // $auth = \Auth::id();
        // $user = Auth::user();
        // dd($user);

        return response()->json($mahasiswa,200);
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
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->no_identitas = $request->npm;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->mhs_tgl_lahir = $request->tgl;
        $mahasiswa->mhs_alamat_rmh = $request->alamat;
        $mahasiswa->mhs_angkatan = $request->angkatan;
        $mahasiswa->mhs_peminatan = $request->peminatan;
        $mahasiswa->mhs_thn_lulus = $request->thn_lulus;
        $mahasiswa->mhs_skripsi = $request->skripsi;
        $mahasiswa->email = $request->email;
        $mahasiswa->mhs_no_wa = $request->wa;
        $mahasiswa->mhs_linkedin = $request->linked_in;

        $mahasiswa->save();

        return response()->json($mahasiswa,200);
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
