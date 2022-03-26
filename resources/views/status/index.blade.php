@extends('layouts.app')
@section('content')
<h1>status</h1>

<h3>
@foreach ($status as $statu)
    <li>{{$statu}}</li>
@endforeach

</h3>
@endsection