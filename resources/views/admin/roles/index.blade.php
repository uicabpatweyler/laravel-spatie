@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Administracion: Roles de Usuario</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                            <tr>
                                <th scope="row">{{$role->id}}</th>
                                <td>{{$role->name}}</td>
                                <td>
                                    @if(auth()->user()->can('role-edit'))
                                        <a class="btn btn-primary btn-sm" href="{{route('roles.edit',['role' => $role->id])}}" role="button">
                                            Editar
                                        </a>
                                    @endif
                                    @if(auth()->user()->can('role-delete'))
                                        <a class="btn btn-danger btn-sm" href="#" role="button">
                                            Borrar
                                        </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
