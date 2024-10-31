<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                => 1,
                'name'              => 'Alexandre Guyot',
                'email'             => 'a.pro.guyot@gmail.com',
                'password'          => bcrypt('alex'),
                'remember_token'    => null,
                'email_verified_at' => now(),
                'is_approved'       => true,
                'locale'            => 'fr',
            ],
        ];

        User::insert($users);
    }
}
