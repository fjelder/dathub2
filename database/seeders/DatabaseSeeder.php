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
        $this->call([
            UserSeeder::class
        ]);
        \App\Models\User::factory(10)->create();
        \App\Models\Company::factory(15)->create();
        \App\Models\Person::factory(15)->create();
    }
}
