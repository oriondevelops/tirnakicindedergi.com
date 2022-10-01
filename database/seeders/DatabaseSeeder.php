<?php

namespace Database\Seeders;

use Database\Factories\WinkAuthorFactory;
use Database\Factories\WinkPostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
        ]);
        \App\Models\User::factory(10)->create();
        (new WinkPostFactory)->count(10)->create();
        (new WinkAuthorFactory)->count(10)->create();
    }
}
