<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\CharacterResetSetting;

class CharacterResetSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = CharacterResetSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'level' => 400,
			'zen' => 10000000,
			'level_points' => 200,
			'level_points_formula' => 2,
			'clear_skills' => 0,
			'clear_inventory' => 0,
			'reset_stats' => 1,
			'reset_limit' => 30
        ];
        CharacterResetSetting::create($arg);
    }
}

// auto invocar
$this->call([
    CharacterResetSettingSeeder::class,
]);
