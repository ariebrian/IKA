<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Mahasiswa;
use App\Dosen;
use App\Pekerjaan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Where to redirect users after update the profile.
     *
     * @var string
     */
    protected $redirectTo = '/profile';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $dosen = Dosen::all();

        return view('layouts.profile', compact('mahasiswa', 'dosen'));
    }

    /**
     * 
     * Function for Mahasiswa
     */

    public function all()
    {
        $query = DB::table('profil_mhs')->get();
        dd($query);
    }

    public function show_profile($id)
    {
        $mahasiswa = Mahasiswa::with('pekerjaan')->where('user_id',$id)->first();
        // $npm = [$id];
        // $mahasiswa = DB::select('select * from profil_mhs where no_identitas = ?', [$id]);
        // dd($mahasiswa);
        $mhs = $mahasiswa->pekerjaan->toArray();
        // dd($mhs);
        $result =[
            'mahasiswa' =>$mahasiswa,
            'pekerjaan' => $mhs,
        ];

        // dd($result);
        return view('layouts.profile', $result);
    }

    public function add()
    {
        $user = Auth::user();
        $data = [
            'nid' => $user->no_identitas,
            'nama' => $user->nama,
            'email' => $user->email,
            'role' => $user->role,
        ];
        return view('layouts.editprofile', $data);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $mahasiswa = new Mahasiswa;

        $mahasiswa->no_identitas = $user->no_identitas;
        $mahasiswa->nama = $user->nama;
        $mahasiswa->mhs_tgl_lahir = $request->tgl;
        $mahasiswa->mhs_alamat_rmh = $request->alamat;
        $mahasiswa->mhs_angkatan = $request->angkatan;
        $mahasiswa->mhs_peminatan = $request->peminatan;
        $mahasiswa->mhs_thn_lulus = $request->thn_lulus;
        $mahasiswa->mhs_skripsi = $request->skripsi;
        $mahasiswa->email = $user->email;
        $mahasiswa->mhs_no_wa = $request->wa;
        $mahasiswa->mhs_linkedin = $request->linked_in;
        dd($mahasiswa);
        $mahasiswa->save();

    }

    /**
     * 
     * Function for Dosen
     */

    public function dosen()
    {
        $query = DB::table('profil_dsn')->get();
        dd($query);
    }

    public function dosen_profile($id)
    {
        $dosen = Dosen::find($id);
        // $mhs = $dosen->pekerjaan;
        $result =[
            'dosen' =>$dosen,
            // 'pekerjaan' => $mhs,
        ];

        dd($result);
    }

}
