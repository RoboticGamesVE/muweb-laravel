<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\CreditsSetting;

class CreditsSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = CreditsSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'url' => 'http://your-url.com/donate',
        ];
        CreditsSetting::create($arg);
    }
}

// auto invocar
$this->call([
    CreditsSettingSeeder::class,
]);
