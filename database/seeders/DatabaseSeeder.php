<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(UserTableSeeder::class);
        $this->call(StateSeeder::class);
        $this->call(LgaSeeder::class);
        $this->call(WardSeeder::class);
        $this->call(CitizenSeeder::class);
    }
}
