<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MahasiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('profil_mhs')->insert([
            'no_identitas' => '140810'.str_random(6),
            'nama' => str_random(10),
            'mhs_tgl_lahir' => Carbon::create('2000','01','01'),
            'mhs_alamat_rmh'=> str_random(10),
            'mhs_angkatan'=> '2015',
            'mhs_peminatan' => str_random(10),
            'mhs_thn_lulus' =>'2019',
            'mhs_skripsi' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'mhs_no_wa' => str_random(10),
            'mhs_linkedin' => str_random(10),
        ]);
    }
}
