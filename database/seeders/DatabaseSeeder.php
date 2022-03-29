<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Keluarga::create([
            'nama' => 'Budi',
            'jenis_kelamin' => 'L',
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Dedi',
            'jenis_kelamin' => 'L',
            'id_orangtua' => 1
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Dodi',
            'jenis_kelamin' => 'L',
            'id_orangtua' => 1
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Dede',
            'jenis_kelamin' => 'L',
            'id_orangtua' => 1
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Dewi',
            'jenis_kelamin' => 'P',
            'id_orangtua' => 1
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Feri',
            'jenis_kelamin' => 'L',
            'id_orangtua' => 2
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Farah',
            'jenis_kelamin' => 'P',
            'id_orangtua' => 2
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Gugus',
            'jenis_kelamin' => 'L',
            'id_orangtua' => 3
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Gandi',
            'jenis_kelamin' => 'L',
            'id_orangtua' => 3
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Hani',
            'jenis_kelamin' => 'P',
            'id_orangtua' => 4
        ]);
        \App\Models\Keluarga::create([
            'nama' => 'Hana',
            'jenis_kelamin' => 'P',
            'id_orangtua' => 4
        ]);
    }
}