<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $data = [
        //     'name' => 'Admin',
        //     'level' => 1,
        //     'email' => "admin@gmail.com",
        //     'password' => '123',
        //     'phone' => '0123456789',
        //     'address' => 'Da Nang',
        //     'gender' => 0,
        //     'birthdate' => '2005-04-06',
        // ];
        // User::create($data);

        $data = [
            'role_name' => 'Admin',
        ];
        Role::create($data);
        $data1 = [
            'role_name' => 'User',
        ];
        Role::create($data1);
    }
}
