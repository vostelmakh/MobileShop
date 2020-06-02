@extends('auth.layouts.master')

@section('title', __('auth.login'))

@section('content')
    <div class="col-md-8">
        <h1>@lang('auth.auth')</h1>
        <div class="card">
            <div class="card-header">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="Login">
                        @csrf
                        <div class="form-group row">
                            @error('email')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <label for="email" class="col-sm-4 col-form-label text-md-right">@lang('auth.email')</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autofocus
                                value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            @error('password')
                                <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <label for="password" class="col-md-4 col-form-label text-md-right">@lang('auth.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('auth.login')
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>

@endsection