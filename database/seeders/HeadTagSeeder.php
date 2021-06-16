<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HeadTag;

class HeadTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = HeadTag::first();
        if ($item) {
            return;
        }
        $arg = [
            'keywords' => 'muonline, Mu Free, Mu Online, MuOnline, season, episode',
            'description' => 'Private MU Online server! A Friendly Community for MuOnline and Much More!',
        ];
        HeadTag::create($arg);
    }
}

// auto invocar
$this->call([
    HeadTagSeeder::class,
]);
