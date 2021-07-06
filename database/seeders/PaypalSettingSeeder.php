<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\PaypalSetting;

class PaypalSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = PaypalSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'email' => 'your@mail.com',
            'punish' => 1,
            'required_code' => 0,
        ];
        PaypalSetting::create($arg);
    }
}

// auto invocar
$this->call([
    PaypalSettingSeeder::class,
]);
