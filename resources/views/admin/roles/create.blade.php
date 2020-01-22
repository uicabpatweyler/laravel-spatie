@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Crear Nuevo Rol de Usuario</div>
          
          <div class="card-body">
            <form  method="POST" action="{{route('roles.store')}}" name="form_create">
              
              @csrf
              
              <div class="form-group row">
                <label for="name" class="col-sm- col-form-label">Nombre del rol:</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('name') is-invalid @enderror"  value="{{ old('name') }}" name="name" id="name" autocomplete="name" autofocus>
                  @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
              </div>
              <a class="btn btn-danger btn-sm" href="{{route('roles.index')}}" role="button">
                Listado
              </a>
              <button type="submit" class="btn btn-primary btn-sm">Guardar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
