<?php

namespace Database\Seeders;

use App\Models\Client;
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
        // \App\Models\User::factory(10)->create();
        Client::create([
            'name'=>'Genérico',
            'phone'=>'0000000000'
        ]);
    }
}
