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
        $arg = [
            'method' => 1,
        ];
        HumanverificationSetting::create($arg);
    }
}
