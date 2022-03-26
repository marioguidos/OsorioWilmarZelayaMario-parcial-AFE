@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>status</h1>
            </div>
            <div class="card-body">
                @foreach ($status as $statu)
                    <li>{{ $statu }}</li>
                @endforeach
            </div>
        </div>
    </div>

    <h3>

    </h3>
@endsection
