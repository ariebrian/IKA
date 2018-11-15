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

        $data = [
            'mahasiswa' => $mahasiswa,
            'dosen' => $dosen
        ];

        // return view('layouts.home', compact('mahasiswa', 'dosen'));
        return view('layouts.home', $data);

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
        if($mahasiswa == NULL){
            return redirect('/add');
        }
        else{
        
        $mhs = $mahasiswa->pekerjaan->toArray();
        // dd($mhs);
        $result =[
            'mahasiswa' => $mahasiswa,
            'pekerjaan' => $mhs,
        ];

        // dd($result);
        return view('layouts.profile', $result);
        }
        
    }

    public function other_profile($id)
    {
        $mahasiswa = Mahasiswa::with('pekerjaan')->where('user_id',$id)->first();
        // $npm = [$id];
        // $mahasiswa = DB::select('select * from profil_mhs where no_identitas = ?', [$id]);
        // dd($mahasiswa);
        $mhs = $mahasiswa->pekerjaan->toArray();
        // dd($mhs);
        $result =[
            'mahasiswa' => $mahasiswa,
            'pekerjaan' => $mhs,
        ];

        // dd($result);
        return view('layouts.profile', $result);
    }

    public function add()
    {
        $user = Auth::user();
        $data = [
            'no_identitas' => $user->no_identitas,
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
        $mahasiswa->tgl_lahir = $request->mhs_tgl_lahir;
        $mahasiswa->gender = $request->jenis_kelamin;
        $mahasiswa->alamat_rmh = $request->mhs_alamat_rmh;
        $mahasiswa->angkatan = $request->mhs_angkatan;
        $mahasiswa->peminatan = $request->mhs_peminatan;
        $mahasiswa->thn_lulus = $request->mhs_thn_lulus;
        $mahasiswa->skripsi = $request->mhs_skripsi;
        $mahasiswa->email = $user->email;
        $mahasiswa->no_wa = $request->mhs_no_wa;
        $mahasiswa->linkedin = $request->mhs_linkedin;
        $mahasiswa->user_id = $user->id;
        // dd($mahasiswa);
        $mahasiswa->save();

        return redirect()->action(
            'ProfileController@show_profile', ['id' => $user->id]
        );

    }

    // public function edit()
    // {
    //     $user = Auth::user();
    //     $mahasiswa = Mahasiswa::with('pekerjaan')->where('user_id',$user->id)->first();

    //     $data = [
    //         'no_identitas' => $user->no_identitas,
    //         'nama' => $user->nama,
    //         'email' => $user->email,
    //         'role' => $user->role,
    //     ];
    //     return view('layouts.updateprofile', $data);
    // }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::with('pekerjaan')->where('user_id',$id)->first();
        
        $result =[
            'mahasiswa' => $mahasiswa,
        ];

        return view('layouts.updateprofile', $result);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $mahasiswa = Mahasiswa::with('pekerjaan')->where('user_id',$user->id)->first();
        // dd($mahasiswa);
        $mahasiswa->no_identitas = $user->no_identitas;
        $mahasiswa->nama = $user->nama;
        $mahasiswa->tgl_lahir = $request->mhs_tgl_lahir;
        $mahasiswa->gender = $request->jenis_kelamin;
        $mahasiswa->alamat_rmh = $request->mhs_alamat_rmh;
        $mahasiswa->angkatan = $request->mhs_angkatan;
        $mahasiswa->peminatan = $request->mhs_peminatan;
        $mahasiswa->thn_lulus = $request->mhs_thn_lulus;
        $mahasiswa->skripsi = $request->mhs_skripsi;
        $mahasiswa->email = $user->email;
        $mahasiswa->no_wa = $request->mhs_no_wa;
        $mahasiswa->linkedin = $request->mhs_linkedin;
        $mahasiswa->user_id = $user->id;

        $mahasiswa->save();

        return redirect()->action(
            'ProfileController@show_profile', ['id' => $mahasiswa->user_id]
        );
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