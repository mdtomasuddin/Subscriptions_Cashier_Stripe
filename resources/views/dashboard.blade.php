@extends('layouts.layout')
@section('content')
    <h1>Dashboard Page</h1>


    <h1>{{ Auth::user()->name }}</h1>

@endsection


