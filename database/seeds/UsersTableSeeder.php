<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$hlwChY/9w7MmiwO3YxDjY.eVW3pDOwqyQZ2Syd3LYqRiGWlcg/Qie',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
