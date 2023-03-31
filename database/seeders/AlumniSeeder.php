<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumni;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumni::create([
           'nama' => 'Pinky',
           'th_lulus' => '2024',
           'jurusan' => 'Teknik Informatika',
           'alamat' => 'Jln. Sulawesi Perum Puri Tanjung Intan',
           'no_hp' => '087678726342',
        ]);
        Alumni::create([
           'nama' => 'Diva',
           'th_lulus' => '2024',
           'jurusan' => 'Teknik Informatika',
           'alamat' => 'Jln. Dahlia Gang 2 No.70.A',
           'no_hp' => '098271827182',
        ]);
    }
}
