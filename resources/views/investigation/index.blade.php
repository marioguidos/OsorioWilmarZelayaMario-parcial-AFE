@extends('layouts.app')
@section('content')
<h1>Investigaciones</h1>

<h3>
@foreach ($investigaciones as $investigacion)
    <li>{{$investigacion}}</li>
@endforeach

</h3>
@endsection