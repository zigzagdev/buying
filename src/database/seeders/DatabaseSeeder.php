<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(RetailerTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(HistoryTableSeeder::class);
    }
}
