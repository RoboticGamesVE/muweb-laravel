<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\ContactSetting;

class ContactSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = ContactSetting::first();
        if ($item) {
            return;
        }
        $arg = [
            'method' => 1,
            'email' => 'tuserver@email.com',
            'length' => 500,
        ];
        ContactSetting::create($arg);
    }
}

// auto invocar
$this->call([
    ContactSettingSeeder::class,
]);