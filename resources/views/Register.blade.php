@extends('layouts.app')

@section('content')
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirme a Senha:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required>
            </div>

            <button type="submit">Registrar</button>
        </form>
    </div>
@endsection
