<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\NewSetting;

class NewSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = NewSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'style_id' => 1,
            'short_length' => 240,
            'enabled_bookmarking' => 0,
        ];
        NewSetting::create($arg);
    }
}

// auto invocar
$this->call([
    NewSettingSeeder::class,
]);
