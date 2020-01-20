<?php

use App\User;
use Illuminate\Database\Seeder;

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
           'name' => 'Weyler A. Uicab P.',
           'email' => 'sa@example.com',
           'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Manuela de J. Kú Tah',
            'email' => 'admin@example.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'name' => 'Jesús R. Uicab Kú',
            'email' => 'supervisor@example.com',
            'password' => Hash::make('password')
        ]);
    }
}
