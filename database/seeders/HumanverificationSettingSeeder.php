<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\HumanverificationSetting;

class HumanverificationSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = HumanverificationSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'method' => 1,
        ];
        HumanverificationSetting::create($arg);
    }
}

// auto invocar
$this->call([
    HumanverificationSettingSeeder::class,
]);
