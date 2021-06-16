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
        $allSeeders = glob(base_path('database/seeders') . '/*.php');
        collect($allSeeders)
            ->each(fn ($file) => require_once $file);
    }
}
