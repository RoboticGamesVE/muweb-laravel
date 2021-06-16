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
        collect(glob(base_path('database/seeders') . '/*.php'))
            ->each(fn ($file) => require_once $file);
    }
}
