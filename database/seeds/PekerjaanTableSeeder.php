<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Pekerjaan::class, 5)->create()->each(function ($u) {
        //     $u->posts()->save(factory(App\Pekerjaan::class)->make());
        // });

    DB::table('pekerjaan_mhs')->insert([
        'tempat_kerja' => str_random(10),
        'alamat_kerja' => str_random(10),
        
    ]);
    }
}
