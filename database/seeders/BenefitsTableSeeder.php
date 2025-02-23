<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BenefitsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('benefits')->insert([
            [
                'id' => 1,
                'title' => 'Custom branding',
                'description' => 'Elevate your brand with a unique URL, custom registration forms, and branded event pages.',
                'icon' => 'Q1JMT723GBYHPVCFKGA0367GCS.svg',
                'created_at' => '2025-02-23 17:55:59',
                'updated_at' => '2025-02-23 20:28:49',
            ],
            [
                'id' => 2,
                'title' => 'Flexible ticketing',
                'description' => 'Create tickets, guest lists, or RSVPs. Set up early bird pricing, group discounts, and more.',
                'icon' => 'Q1JMT72P715ACKGWOM2NXQ17RD.svg',
                'created_at' => '2025-02-23 17:57:32',
                'updated_at' => '2025-02-23 20:29:08',
            ],
            [
                'id' => 3,
                'title' => 'Community building',
                'description' => 'Engage your audience with live polls, Q&A sessions, and networking opportunities.',
                'icon' => 'Q1JMT8071AXP2KY05TMWAF9SN3.svg',
                'created_at' => '2025-02-23 17:58:16',
                'updated_at' => '2025-02-23 20:29:25',
            ],
            [
                'id' => 4,
                'title' => 'Seamless payments',
                'description' => 'Accept payments in over 135 currencies with our secure payment processing system.',
                'icon' => 'Q1JMT80NC519FNDQRKHPK3TSGM.svg',
                'created_at' => '2025-02-23 17:58:59',
                'updated_at' => '2025-02-23 20:29:40',
            ],
        ]);
    }
}