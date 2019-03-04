@extends('layouts.app')
@section('content')
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
                <img src="{{URL::to('/img/sped_logo.jpg')}}"
                     style=" display: block; margin: 0 auto; width: 211px; height: 199px">
                <h3>SPED LEARNING SYSTEM</h3>
                <h4>STUDENT</h4>
            </div>

            <!-- Login Form -->
            <form method="POST" action="{{ route('student.login.submit') }}">
                @csrf
                <div class="form-group">
                    <input id="username" type="text" class="form-control
                {{ $errors->has('email') ? ' is-invalid' : '' }}" name="username" value="{{ old('email') }}"
                           required autofocus placeholder="Username">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <input id="password" type="password"
                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" required placeholder="Password">

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group small clearfix">
                    <label class="checkbox-inline">
                        <input class="form-check-input" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember me</label>
                </div>
                <input type="submit" class="fadeIn fourth" value="Login">
            </form>
            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="{{ route('admin.login') }}">Admin</a>
                <span class="m-5"></span>
                <a class="underlineHover" href="{{ route('teacher.login') }}">Teacher</a>
            </div>
        </div>
    </div>
@endsection
