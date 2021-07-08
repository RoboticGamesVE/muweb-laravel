<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ClearpkSetting;

class ClearpkSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = ClearpkSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'amount' => 100000,
        ];
        ClearpkSetting::create($arg);
    }
}

// auto invocar
$this->call([
    ClearpkSettingSeeder::class,
]);
