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
                        <form method="POST" action="{{ route('save.apps') }}">
                            <div class="mb-3">
                                <label for="name" class="col-form-label">nombre:</label>
                                <input type="text" name="name" class="form-control" id="name">
                            </div>


                            <div class="mb-3">
                                <label for="password" class="col-form-label">contraseña:</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>


                            <div class="mb-3">
                                <label for="type" class="col-form-label">Tipo:</label>
                                <input type="text" name="type" class="form-control" id="type">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success"><i
                                        class="fa-solid fa-floppy-disk"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
