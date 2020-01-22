@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Dashboard: Administrator</div>

          <div class="card-body">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif
            You are logged in!
            <hr>
            @can('roles-manage')
                <a class="btn btn-primary btn-sm" href="{{route('roles.index')}}" role="button">
                    Gestion de Roles de Usuario
                </a>
            @endcan
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
