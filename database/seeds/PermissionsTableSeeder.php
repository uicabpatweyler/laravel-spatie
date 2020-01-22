<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'access-admin-dashboard']);
        Permission::create(['name' => 'roles-manage']);
        Permission::create(['name' => 'role-create']); //C
        Permission::create(['name' => 'role-store']);
        Permission::create(['name' => 'role-read']); //R
        Permission::create(['name' => 'role-list']);
        Permission::create(['name' => 'role-edit']);
        Permission::create(['name' => 'role-update']); //U
        Permission::create(['name' => 'role-delete']); //D
    }
}
