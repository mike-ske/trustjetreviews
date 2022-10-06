@extends('base')

@section('content')
<div class="container" id="logincont">
    <div class="row justify-content-center" id="rowlog">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    
                      <div class="row">
                        
                        <div id="logfm" class="col-md-6 col-sm-12" style="border-right:1px solid #ddd">
                            <div class="social-box" id="social-box" style="max-width:100%">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('social-auth', 'facebook') }}" style="background-color:white !important; border-color:#ccc;color:#333; " title="Facebook" class="btn btn-block btn-social btn-lg btn-facebook">
                                            <img style="margin: 5px;padding: 3px;width: 30px;" src="/public/star/facebook.png"> Sign in with Facebook
                                        </a>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 20px;margin-bottom: 20px">
                                    <div class="col-md-12">
                                        <a href="{{ route('social-auth', 'google') }}" style="background-color:white !important;color:#333; border-color:#ccc" title="Google" class="btn btn-block btn-social btn-lg btn-google-plus">
                                            <img style="margin: 5px;padding: 3px;width: 30px;" src="/public/star/google.png"> Sign in with Google
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('social-auth', 'linkedin') }}" style="background-color:white !important; border-color:#ccc;color:#333; " title="Windows Live Hotmail" class="btn btn-block btn-social btn-lg btn-linkedin">
                                            <img style="margin: 5px;padding: 3px;width: 30px;" src="/public/star/linkedin.png"> Sign in with LinkedIn
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
        
                                <div class="form-group row">
                                    <div class="col-md-12 col-lg-12">
                                        <input id="email" placeholder="Enter email address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-12 col-lg-12">
                                        <input id="password" placeholder="Enter password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
        
                                <div class="form-group row">
                                    <div class="col-md-6 col-md-12 col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 col-md-12 col-lg-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Login') }}
                                        </button>
        
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
        
                                        <hr>
                                         {!! _("Don't have an account?") !!} 
                                         <a href='{{ route('register')}}' class="text-primary">{{ __('Signup') }}</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
