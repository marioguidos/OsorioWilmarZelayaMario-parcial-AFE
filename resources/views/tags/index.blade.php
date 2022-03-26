@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1>tags</h1>
            </div>
            <div class="card-body">
                @foreach ($tags as $tag)
                    <li>{{ $tag }}</li>
                @endforeach
            </div>
        </div>
    </div>
@endsection
