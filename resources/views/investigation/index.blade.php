@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>Investigaciones</h1>
            </div>
            <div class="card-body">
                @foreach ($investigaciones as $investigacion)
                    <li>{{ $investigacion }}</li>
                @endforeach
            </div>
        </div>
    </div>

    <h3>

    </h3>
@endsection
