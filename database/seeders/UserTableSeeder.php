<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'no_hp' => '081234567890',
                'jen_kel' => 'Laki Laki',
                'tmpt_lahir' => 'Bandung',
                'tgl_lahir' => '1990-01-01',
                'alamat' => 'Jl. Raya Bandung',
                'password' => bcrypt('123'),
                'foto' => '/img/user.jpg',
                'level' => 1
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'no_hp' => '081234567890',
                'jen_kel' => 'Perempuan',
                'tmpt_lahir' => 'Bandung',
                'tgl_lahir' => '1991-01-01',
                'alamat' => 'Jl. Raya Bandung',
                'password' => bcrypt('123'),
                'foto' => '/img/user.jpg',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
