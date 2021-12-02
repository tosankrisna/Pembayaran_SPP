<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                'nama_kelas' => 'RPL 1',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_kelas' => 'RPL 2',
                'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
            ],
            [
                'nama_kelas' => 'MM 1',
                'kompetensi_keahlian' => 'Multimedia'
            ],
            [
                'nama_kelas' => 'MM 2',
                'kompetensi_keahlian' => 'Multimedia'
            ],
            [
                'nama_kelas' => 'TKJ 1',
                'kompetensi_keahlian' => 'Teknik Komputer Jaringan'
            ],
            [
                'nama_kelas' => 'TKJ 2',
                'kompetensi_keahlian' => 'Teknik Komputer Jaringan'
            ],
        ];

        foreach($kelas as $kls) {
            Kelas::create($kls);
        }
    }
}
