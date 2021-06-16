<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\BannedIp;

class BannedIpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = BannedIp::first();
        if ($item) {
            return;
        }
        $arg = [
            'banned_ip' => '127.0.0.1',
        ];
        BannedIp::create($arg);
    }
}

// auto invocar
$this->call([
    BannedIpSeeder::class,
]);
