<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            [
                'id' => 1,
                'title' => 'Become a Tenant at Your Event of Choice Easily, Quicky, and Relaisly.',
                'image' => '/assets/banner1.jpg',
                'created_at' => '2025-02-23 11:39:33',
                'updated_at' => '2025-02-21 12:59:33',
            ],
            [
                'id' => 2,
                'title' => 'Become a Tenant at Your.',
                'image' => 'aseets/banner2.webp',
                'created_at' => '2025-02-23 11:39:33',
                'updated_at' => '2025-02-21 12:59:33',
            ],
            
        ]);
    }
}