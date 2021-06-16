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
        $item = LostpasswordSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'method_id' => 1,
        ];
        LostpasswordSetting::create($arg);
    }
}

// auto invocar
$this->call([
    LostpasswordSettingSeeder::class,
]);
