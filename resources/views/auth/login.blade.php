@extends('layouts.auth')

@section('content')

    <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-4 col-sm-10 col-sm-offset-2 col-xs-11 col-xs-offset-1 ">

                            <div class="register-card">
                                <h3 class="title">Login</h3>
                                
                                <form class="register-form" method="POST" action="{{ route('login') }}">
                                    {{ csrf_field() }}

                                    <!-- email -->
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                            <label for="email" class="control-label">E-Mail Address</label>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                    </div>

                                    <!-- password -->
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label">Password</label>

                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-neutral btn-block">
                                            Login
                                        </button>
                                    </div>

                                <!-- "remember me" -->
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                                            Remember Me
                                    </label>
                                </div>

                                </form>

                                <div class="form-group">
                                    <div class="forgot">
                                        <a href="{{ route('password.request') }}" class="btn btn-simple btn-neutral">Forgot password?</a>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                </div>     
            <!-- <div class="footer register-footer text-center"> -->
            <div class="footer register-footer text-center">
                    <h6>&copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-coffee coffee"></i> by Richard Trujillo</h6>
            </div>
        </div>
    </div>      

@endsection
