<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        $roleSuperAdmin = Role::findByName('Super Administrador');
        $roleAdmin = Role::findByName('Administrador');

        $roleSuperAdmin->givePermissionTo(Permission::all());
        $roleAdmin->givePermissionTo('access-admin-dashboard');

    }
}
