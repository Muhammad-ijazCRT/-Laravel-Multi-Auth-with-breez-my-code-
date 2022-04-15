<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Middleware\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory(10)->create();
    }
}