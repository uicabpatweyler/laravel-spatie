<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleHasPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::findByName('Super Administrador');

        $role->givePermissionTo('access-admin-dashboard');

        $user = User::first();

        $user->assignRole($role);

    }
}
