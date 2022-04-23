@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
    <p class="login-box-msg">Silahkan Login</p>

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="input-group mb-3 {{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    
        </div>

        <div class="input-group mb-3 {{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="icheck-primary">
                {{-- <input type="checkbox" id="remember"> --}}
                <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                <label for="remember">
                    Ingat Saya
                </label>
                </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
        <!-- /.col -->
        </div>
    </form>

    <p class="mb-1">
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Lupa password?
        </a>
    </p>
    <p class="mb-1">
        <a href="/register" class="btn btn-link">Belum punya akun? Daftar</a>
    </p>
    </div>
    <!-- /.login-card-body -->
</div>
@endsection
