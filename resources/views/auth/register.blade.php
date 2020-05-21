@extends('auth.layouts.master')

@section('title', 'Регистрация')

@section('content')
<div class="col-md-8">
    <h1>Регистрация</h1>
    <div class="card">
        <div class="card-header"></div>
        <form method="POST" action="{{ route('register') }}" aria-label="Register">
            @csrf
            <div class="form-group row">
                @error('name')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="name" class="col-md-4 col-form-label text-md-right">Имя</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name"
                           value="{{ old('name') }}" required autofocus>

                </div>
            </div>

            <div class="form-group row">
                @error('email')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" required autofocus
                                value="{{ old('email') }}">

                </div>
            </div>

            <div class="form-group row">
                @error('password')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="password" class="col-md-4 col-form-label text-md-right">Пароль</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control"
                           name="password" required>

                </div>
            </div>

            <div class="form-group row">
                @error('password-confirm')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Подтвердите
                    пароль</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                           required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Зарегистрироваться
                    </button>
                </div>
            </div>
        </form>
        <div class="card-body">
        </div>
    </div>
</div>
@endsection