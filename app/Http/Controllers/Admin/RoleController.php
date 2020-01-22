<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use Illuminate\Http\Request;
use App\Models\Admin\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{

    public function index()
    {
        $this->authorize('viewAny', Role::class);
        return view('admin.roles.index',[
            'roles' => Role::all()
        ]);
    }

    public function create()
    {
        $this->authorize('create', Role::class);
        return response()->view('admin.roles.create');
    }


    public function store(RoleRequest $request)
    {
        $this->authorize('create', Role::class);
        $role = Role::create([
            'name' => $request->input('name')
        ]);
        return redirect()->route('roles.edit',['role'=> $role->id])
            ->with('success','El rol de usuario se ha creado correctamente');
    }

    public function show(Role $role)
    {
        $this->authorize('view', $role);
        return ddd($role);
    }

    public function edit(Role $role)
    {
        $this->authorize('update', $role);
        return view('admin.roles.edit',[
            'role' => $role
        ]);
    }

    public function update(Request $request, Role $role)
    {
        $this->authorize('update', $role);
        $role->name = $request->input('name');
        $role->save();
        return redirect()->route('roles.edit',['role'=> $role->id])
            ->with('success','El rol de usuario se ha guardado correctamente');

    }

    public function destroy($id)
    {
        //
    }
}
