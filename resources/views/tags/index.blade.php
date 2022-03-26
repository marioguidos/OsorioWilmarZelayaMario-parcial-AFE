@extends('layouts.app')
@section('content')
<h1>tags</h1>

<h3>
@foreach ($tags as $tag)
    <li>{{$tag}}</li>
@endforeach

</h3>
@endsection