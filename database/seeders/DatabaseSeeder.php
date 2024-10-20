<?php

namespace Database\Seeders;
use App\Models\Anggota;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            'nama'=> 'Vincent Duaorang',
            'Hp'=> '081123123123'
        ]);
        Anggota::create([
            'nama'=> 'Hadi Yumemiru',
            'Hp'=> '086726482884'
        ]);
        Anggota::create([
            'nama'=> 'Joko Tanakakawa',
            'Hp'=> '081901555913'
        ]);
    }
}
