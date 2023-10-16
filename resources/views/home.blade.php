@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h3>Gestiona tu contraseña</h3>
                        <a href="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">contraseña</th>
                                    <th scope="col">tipo</th>
                                    <th scope="col">Accion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($app as $apps)
                                    <tr>
                                        <td scope="row">{{ $apps->id }}</td>
                                        <td scope="row">{{ $apps->name }}</td>
                                        <td scope="row"><i class="fa-solid fa-hashtag"></i> <i
                                                class="fa-solid fa-hashtag"></i> <i class="fa-solid fa-hashtag"></i></td>
                                        <td scope="row">{{ $apps->type }}</td>

                                        {{-- <td scope="row">{{ $apps->user }}</td> --}}

                                        </td>
                                        <td scope="row">
                                            <a href="#" class="btn btn-warning"><i
                                                    class="fa-solid fa-pencil"></i></a>&nbsp;
                                            <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
