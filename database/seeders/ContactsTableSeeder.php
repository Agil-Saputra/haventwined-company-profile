<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('contacts')->insert([
            [
                'id' => 1,
                'platform' => 'Email',
                'link' => 'mailto:buasbdacudaa',
                'icon' => '01MT8a4G5PC4HXXW0MAA6AE#xg',
                'created_at' => '2025-02-23 18:00:16',
                'updated_at' => '2025-02-23 20:35:45',
            ],
            [
                'id' => 2,
                'platform' => 'Whatsapp',
                'link' => 'wa.me/+162138114314421',
                'icon' => '01MT89YGPKTDDBGPID2GODN9s.svg',
                'created_at' => '2025-02-23 20:34:41',
                'updated_at' => '2025-02-23 20:34:41',
            ],
        ]);
    }
}