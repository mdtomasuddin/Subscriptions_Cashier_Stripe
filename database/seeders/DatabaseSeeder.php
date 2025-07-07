<?php

namespace Database\Seeders;

use Database\Seeders\ContentSeeder;
use Database\Seeders\DynamicPageSeeder;
use Database\Seeders\FAQSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\SocialMediaSeeder;
use Database\Seeders\SystemSettingSeeder;
use Database\Seeders\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    public function run(): void {
        $this->call([
            UserSeeder::class,
            SystemSettingSeeder::class,
            FAQSeeder::class,
            DynamicPageSeeder::class,
            SocialMediaSeeder::class,
            ContentSeeder::class,
            ServiceSeeder::class,
        ]);
    }
}
