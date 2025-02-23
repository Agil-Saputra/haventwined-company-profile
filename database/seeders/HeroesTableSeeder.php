<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('heroes')->insert([
            [
                'id' => 1,
                'title' => 'Build a community around your events',
                'description' => 'Have you read helps you create, manage, and grow your events. From ticketing to custom branding, we have all the tools you need to make your event a success.',
                'created_at' => '2025-02-23 17:56:36',
                'updated_at' => '2025-02-23 20:54:55',
            ],
        ]);
    }
}