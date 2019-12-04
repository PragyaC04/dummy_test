@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
                <div class="panel-heading"><img class='center' src='data:image/jpeg;base64,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'>
</div><div class='panel-heading' style='align:center;'>Login</div>

               
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary ">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
          
</div>
@endsection
