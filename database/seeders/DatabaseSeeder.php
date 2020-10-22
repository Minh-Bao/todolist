<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Theme;
use App\Models\Project;
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
        User::factory(10)->create();
        Project::factory(10)->create();
        Theme::factory(100)->create();
    }
}
