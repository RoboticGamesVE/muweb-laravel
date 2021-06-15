<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\LostpasswordSetting;

class LostpasswordSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arg = [
            'method_id' => 1,
        ];
        LostpasswordSetting::create($arg);
    }
}
