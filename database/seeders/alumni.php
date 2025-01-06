<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class alumni extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        DB::table('alumni')->insert([
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'fauziah adifia',
                'jurusan' => 'pendidikan akutansi',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'jasmine fadillah',
                'jurusan' => 'akutansi',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'jasmine fadillah',
                'jurusan' => 'sastra inggris',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'abimael lemijel',
                'jurusan' => 'teknik elektro',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'fadilah abubakar',
                'jurusan' => 'sastra inggris',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'fidda nayyara',
                'jurusan' => 'pend vok. desain fashion',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'shabrina fachrunnisa',
                'jurusan' => 'desain model',
            ],
            [
                // 01 nov 
                'universitas' => 'unj',
                'nama' => 'abdul rahman',
                'jurusan' => 'logistik maritim',
            ],
        ]);
    }
}