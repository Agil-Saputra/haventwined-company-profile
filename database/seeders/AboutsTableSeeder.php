<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('abouts')->insert([
            [
                'title' => 'For platform',
                'description' => 'coments tenants with event organizers who have partnered with us, either directly or indirectly, making event participation easier than ever. With a commitment to efficiency and user-friendly services, we ensure a smooth experience except during scheduled maintenance, upgrades, or repairs to enhance our platform\'s performance.',
                'created_at' => '2025-02-23 17:53:55',
                'updated_at' => '2025-02-23 20:48:04',
            ],
        ]);
    }
}