@extends('layouts.auth-layout')

@section('content')
    <form action="{{ route('userRegister') }}" method="POST">
        @csrf

        @if (Session::has('success'))
            <p style="color: green">{{ Session::get('success') }}</p>
        @endif

        {{-- Validation Errors --}}
        @if ($errors->any())
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <h1>Sign up</h1>
        <fieldset>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </fieldset>

        <button type="submit">Register</button>
    </form>
@endsection
