<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\GrandresetSetting;

class GrandresetSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = GrandresetSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'resets' => 50,
			'level' => 400,
			'zen' => 1000000000,
			'credits' => 0,
			'credits_formula' => 1,
			'level_points' => 10000,
			'level_points_formula' => 1,
			'clear_skills' => 1,
			'clear_inventory' => 0,
			'reset_stats' => 1
        ];
        GrandresetSetting::create($arg);
    }
}

// auto invocar
$this->call([
    GrandresetSettingSeeder::class,
]);
