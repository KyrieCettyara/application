<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_object = new UserModel();

        $user_object->insertBatch([

            [
                "name" => "admin",
                "email" => "admin@gmail.com",
                "image" => "default.jpg",
                "role_id" => 1,
                "is_active" => 1,
                "password" => password_hash("12345678", PASSWORD_DEFAULT)
            ],
            [
                "name" => "user",
                "email" => "user@gmail.com",
                "image" => "default.jpg",
                "role_id" => 2,
                "is_active" => 1,
                "password" => password_hash("12345678", PASSWORD_DEFAULT)
            ]
        ]);
    }
}
