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
                'universitas' => 'ugm',
                'nama' => 'danil fadly',
                'jurusan' => 'teknik mesin',
            ],
            [ 
                'universitas' => 'unair',
                'nama' => 'dharma fattahul winzi',
                'jurusan' => 'teknik elektro',
            ],
            [ 
                'universitas' => 'unair',
                'nama' => 'adelia',
                'jurusan' => 'sistem infomasir',
            ],
            [ 
                'universitas' => 'unair',
                'nama' => 'nadia janeeta adha',
                'jurusan' => 'teknik robotik',
            ],
            [ 
                'universitas' => 'ipb',
                'nama' => 'm daffa singawinata',
                'jurusan' => 'teknik rpl',
            ],
            [ 
                'universitas' => 'ipb',
                'nama' => 'm siti rohayati',
                'jurusan' => 'manajemen industri',
            ],
            [ 
                'universitas' => 'ub',
                'nama' => 'm adje nur alim',
                'jurusan' => 'agribisnis',
            ],
            [ 
                'universitas' => 'ub',
                'nama' => 'm alisha dwi fatika',
                'jurusan' => 'ekonomi islam',
            ],
            [ 
                'universitas' => 'ub',
                'nama' => 'm nida rindy',
                'jurusan' => 'akutansi',
            ],
            [ 
                'universitas' => 'undip',
                'nama' => 'kamila firdausi',
                'jurusan' => 'akutansi perpajakan',
            ],
            [ 
                'universitas' => 'undip',
                'nama' => 'm xandira felisha',
                'jurusan' => 'rekayasa perancangan mekanik',
            ],
            [ 
                'universitas' => 'undip',
                'nama' => 'm surya fachmeizza',
                'jurusan' => 'perkapalan',
            ],
            [ 
                'universitas' => 'upi',
                'nama' => 'maldini syaif ali',
                'jurusan' => 'sistem informasi',
            ],
            [ 
                'universitas' => 'upi',
                'nama' => 'm rafi zamzam',
                'jurusan' => 'rekayasa perangkat lunak',
            ],
            [ 
                'universitas' => 'upi',
                'nama' => 'norma agesti',
                'jurusan' => 'akutansi',
            ],
            [ 
                'universitas' => 'upi',
                'nama' => 'annisa harti',
                'jurusan' => 'tata busana',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'fauziah adifia',
                'jurusan' => 'pendidikan akutansi',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'jasmine fadillah',
                'jurusan' => 'akutansi',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'jasmine fadillah',
                'jurusan' => 'sastra inggris',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'abimael lemijel',
                'jurusan' => 'teknik elektro',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'fadilah abubakar',
                'jurusan' => 'sastra inggris',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'fidda nayyara',
                'jurusan' => 'pend vok. desain fashion',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'shabrina fachrunnisa',
                'jurusan' => 'desain model',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'abdul rahman',
                'jurusan' => 'logistik maritim',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'mohamad dandi prayoga',
                'jurusan' => 'rekayasa manufaktur',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'bahmi rahman isya',
                'jurusan' => 'pend vok. teknik mesin',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'roki catirad',
                'jurusan' => 'teknik mesin',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'alma maulida',
                'jurusan' => 'pv. teknik mesin',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'djuanda',
                'jurusan' => 'teknik informatika',
            ],
            [ 
                'universitas' => 'unj',
                'nama' => 'aisyah',
                'jurusan' => 'elektronika',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'muhammad diva',
                'jurusan' => 'teknik digital multimedia',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'aufa syadza',
                'jurusan' => 'akutansi',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'siti rohayati',
                'jurusan' => 'akutansi keuangan',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'diana faradiba',
                'jurusan' => 'akutansi',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'halimatussya diah',
                'jurusan' => 'keuangan dan perbankan',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'lia rahmawati',
                'jurusan' => 'manajemen keuangan',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'reza purnama',
                'jurusan' => 'manufaktur',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'rn. ichsan said',
                'jurusan' => 'teknik mesin',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'andika yulyan',
                'jurusan' => 'broadband & multimedia',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'nur hadi',
                'jurusan' => 'manufaktur',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'ahdyat dziafatur',
                'jurusan' => 'teknik mesin',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'ariefudin faiz',
                'jurusan' => 'teknik mesin',
            ],
            [ 
                'universitas' => 'pnj',
                'nama' => 'bara wiguna',
                'jurusan' => 'alat berat',
            ],
        ]);
    }
}