<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\AddpointSetting;

class AddpointSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = AddpointSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'strength_limit' => 65000,
            'agility_limit' => 65000,
            'vitality_limit' => 65000,
            'energy_limit' => 65000,
            'command_limit' => 65000,
        ];
        AddpointSetting::create($arg);
    }
}

// auto invocar
$this->call([
    AddpointSettingSeeder::class,
]);
