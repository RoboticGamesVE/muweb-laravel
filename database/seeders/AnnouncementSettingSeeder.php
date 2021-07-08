<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AnnouncementSetting;

class AnnouncementSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = AnnouncementSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'show_author' => 1,
        ];
        AnnouncementSetting::create($arg);
    }
}

// auto invocar
$this->call([
    AnnouncementSettingSeeder::class,
]);
