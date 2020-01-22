<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use App\Models\Admin\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Exceptions\UnauthorizedException;

class RoleController extends Controller
{

    public function __construct()
    {
        //$this->middleware(['permission:roles-manage']);
    }

    public function index()
    {
        $this->authorize('viewAny', Role::class);
        return view('admin.roles.index',[
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return redirect()->route('roles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
