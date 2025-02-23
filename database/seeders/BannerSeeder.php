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
                'image' => '[3]IN5705/07A1Y4QAC98QTC7_IRP3',
                'created_at' => '2025-02-23 11:39:33',
                'updated_at' => '2025-02-21 12:59:33',
            ],
            
        ]);
    }
}