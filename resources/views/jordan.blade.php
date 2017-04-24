@extends('layouts.app')

@section('content')

    <h1>HELLO!!!</h1>
    <h3>{{ Auth::user()->name }}</h3>
@endsection