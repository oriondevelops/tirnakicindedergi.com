<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Z',
            'email' => 'oriononair@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ]);

        DB::table('wink_authors')->insert([
            'id' => (string) Str::uuid(),
            'slug' => Str::slug('Mücahit Uğur'),
            'name' => 'Mücahit Uğur',
            'email' => 'oriononair@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'bio' => 'I am Orion.',
            'remember_token' => Str::random(10),
        ]);

        DB::table('wink_authors')->insert([
            'id' => (string) Str::uuid(),
            'slug' => Str::slug('Oğuzhan Korkmaz'),
            'name' => 'Oğuzhan Korkmaz',
            'email' => 'oguzhankorkmaz1409@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'bio' => 'İnsan, okuryazar.',
            'remember_token' => Str::random(10),
        ]);
    }
}
