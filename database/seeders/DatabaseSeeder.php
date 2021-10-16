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
            'name'=>'Farlin',
            'lastname'=>'Mejía',
            'fullname'=>'Farlin Mejía',
            'email'=>'fmejia@gmail.com',
            'slug'=>'farlin-mejía',
            'photo'=>'https://ui-avatars.com/api/?name=Farlin+Mejia&color=FFFFFF&background=F400A0',
            'username'=>'fmejia',
            'phone'=>'8296406391',
            'password'=>bcrypt('fmejia'),
            
        ]);
        $user->assignRole($admin);
        Client::create([
            'name'=>'Genérico',
            'phone'=>'809-765-4321'
        ]);
    }
}
