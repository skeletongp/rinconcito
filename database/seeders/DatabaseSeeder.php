<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create(['name' => 'admin']);
        $seller = Role::create(['name' => 'seller']);
        $cooker = Role::create(['name' => 'cooker']);
        $user=User::create([
            'name'=>'Ismael',
            'lastname'=>'Contreras',
            'fullname'=>'Ismael Contreras',
            'email'=>'support@ismaeldigitador.com',
            'slug'=>'ismael-contreras',
            'photo'=>'https://ui-avatars.com/api/?name=Ismael+Contreras&color=FFFFFF&background=213748',
            'username'=>'support',
            'phone'=>'8493153337',
            'password'=>bcrypt('skeletongp'),
            
        ]);
        $user->assignRole('admin');
        Client::create([
            'name'=>'Genérico',
            'phone'=>'809-765-4321'
        ]);
    }
}
