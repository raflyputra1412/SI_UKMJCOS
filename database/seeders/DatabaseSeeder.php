<?php

namespace Database\Seeders;

use App\Models\super_admin;
use Illuminate\Database\Seeder;
use App\Models\User;

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

        User::create([
            'nim' => '170010009',
            'nama_lengkap' => 'Muhammad Rafly Hersa Putra',
            'program_studi' => 'Sistem Komputer',
            'angkatan' => '2017',
            'no_hp' => '089687679663',
            'email' => 'raflyputra68@gmail.com',
            'password' => '12345',
            // 'jabatan' => 'pengurus',
        ]);

        super_admin::create([
            'username' => 'username',
            'password' => bcrypt('12345'),
            'jabatan' => 'pembina',
        ]);
    }
}
