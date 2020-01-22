<?php

use App\User;
use Illuminate\Database\Seeder;

class ModelHasRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get user
        $userSuperAdmin = User::where('email','sa@example.com')->first();
        $userAdmin = User::where('email','admin@example.com')->first();
        $userSupervisor = User::where('email','supervisor@example.com')->first();
        //Assign role
        $userSuperAdmin->assignRole('Super Administrador');
        $userAdmin->assignRole('Administrador');
        $userSupervisor->assignRole('Supervisor');
    }
}
