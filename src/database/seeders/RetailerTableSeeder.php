<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Retailer;

class RetailerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Retailer::factory(10)->create();
    }
}
