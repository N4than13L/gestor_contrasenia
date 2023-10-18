@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Panel de administración</h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif

                        <h3>Gestiona tu contraseña</h3>
                        <a href="{{ route('apps.view') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Contraseña</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($app as $apps)
                                    @if (Auth::user() && Auth::user()->id == $apps->users_id)
                                        <tr>
                                            <td scope="row">{{ $apps->id }}</td>
                                            <td scope="row">{{ $apps->name }}</td>
                                            <td scope="row">8b948a4/bbc723a373427&9bf%9bbc4
                                            </td>
                                            <td scope="row">{{ $apps->type }}</td>

                                            </td>
                                            <td scope="row">
                                                <a href="{{ route('password.apps', ['id' => $apps->id]) }}"
                                                    class="btn btn-info"><i class="fa-solid fa-eye"></i></a>
                                                &nbsp;
                                                <a href="{{ route('edit.apps', ['id' => $apps->id]) }}"
                                                    class="btn btn-warning"><i class="fa-solid fa-pencil"></i></a>&nbsp;
                                                <a href="{{ route('delete.apps', ['id' => $apps->id]) }}"
                                                    class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
