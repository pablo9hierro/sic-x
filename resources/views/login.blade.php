@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required autofocus>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
@endsection
