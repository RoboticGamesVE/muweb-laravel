<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\WebsiteSetting;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arg = [
            'website_url' => 'http://web.com',
            'website_title' => 'Title',
            'md5' => 0,
            'crypt_key' => '12345678',
            'admin_nick' => 'admin',
            'admin_mail' => 'admin@mail.com',
            'id_template' => 1,
            'copyright' => 'Copyright',
            'license' => '1234-1234-1234-1234',
        ];
        WebsiteSetting::create($arg);
    }
}

// auto invocar
$this->call([
    WebsiteSettingSeeder::class,
]);