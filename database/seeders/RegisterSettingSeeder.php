<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\RegisterSetting;

class RegisterSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arg = [
            'required_verify' => 0,
            'required_token' => 0,
            'length_token' => 12,
            'default_token' => '111111111111',
        ];
        RegisterSetting::create($arg);
    }
}
