<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
               'name'=>' Admin',
               'email'=>'ziva@example.com',
                'level'=>'admin',
               'password'=> bcrypt('123456'),
            ],
            [
                'username' => 'customer',
               'name'=>'Customer',
               'email'=>'noel@example.com',
                'level'=>'customer',
               'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
