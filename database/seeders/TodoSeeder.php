<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //\App\Models\Todo::factory(3)->create();
        factory(App\Todo::class, 3)->create();
    }
}
