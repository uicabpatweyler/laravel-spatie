@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard de Usuario</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <hr>

                    @can('access-admin-dashboard')
                        <a class="btn btn-primary btn-sm" href="{{route('admin_dashboard')}}" role="button">
                            Dashboard de Administracion
                        </a>
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
