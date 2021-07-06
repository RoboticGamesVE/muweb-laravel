<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RssSetting;

class RssSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = RssSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'url' => 'http//your-rss.com',
            'title_length' => 20,
            'count' => 5,
            'time_check' => 60,
        ];
        RssSetting::create($arg);
    }
}

// auto invocar
$this->call([
    RssSettingSeeder::class,
]);
