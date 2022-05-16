<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class RegisterAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $user = [
            'name'  => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('password')
        ];
        $admin = [
            ['name'  => 'Admin','email' => 'admin@admin.com','password' =>bcrypt('password'), 'is_admin'=>1],
            ['name'  => 'Editor','email' => 'editor@editor.com','password' =>bcrypt('password'), 'is_admin'=>1],
            ['name'  => 'Author','email' => 'author@author.com','password' =>bcrypt('password'),'is_admin'=>1],
        ];
        User::create($user);
        User::insert($admin);
    }
}
