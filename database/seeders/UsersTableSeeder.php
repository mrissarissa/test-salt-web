<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'diki',
            'age' => 24,
            'email'=> 'diki@gmail.com',
            'password' => md5('diki123')
        ]);
        User::create([
            'name' => 'indira',
            'age' => 28,
            'email'=> 'indira@gmail.com',
            'password' => md5('indira123')
        ]);
        User::create([
            'name' => 'feby',
            'age' => 21,
            'email'=> 'feby@gmail.com',
            'password' => md5('feby123')
        ]);
    }
}
