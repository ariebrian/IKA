<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Mahasiswa;
use App\Pekerjaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class PekerjaanController extends Controller
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('layouts.updatepekerjaan');
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
        // dd($work);
        // $npm = Auth::user()->no_identitas;
        $uid = Mahasiswa::where('user_id',Auth::user()->id)->first()->id;
        // dd($uid);
        $work->save();
         
         $work->mahasiswa()->attach($uid);

         return redirect()->action(
            'ProfileController@show_profile', ['id' => $uid]
        );
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
