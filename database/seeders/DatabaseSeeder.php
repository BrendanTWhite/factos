<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Checkin;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Location::factory()
            ->count(8)
            ->has(Checkin::factory()->count(3))
            ->create();

    }
}
