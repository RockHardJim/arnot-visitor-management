@extends('layouts.site')

@section('content')
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center no-gutters min-vh-100">

            <div class="col-12 col-md-8 col-lg-8 py-8 py-md-11 align-items-center">
                
                                            <div class="row">
                                               
                <div class="col-md-12 col-sm-12">
                     <center>
                    @if(setting('site_logo'))
                        <img src="{{ asset('images/'.setting('site_logo')) }}" class="mx-auto fill-primary" data-inject-svg="" alt="">
                    @else
                        <img src="{{ asset('assets/images/brand.png') }}" class="mx-auto fill-primary" data-inject-svg="" alt="" >
                    @endif
                    </center>
                </div>
                
            </div>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>
            <br/>

                <!-- Heading -->
                <h1 class="font-bold text-center">Sign in</h1>

                <!-- Text -->
                <p class="text-center mb-6">{{setting('site_description')}}</p>


                <!-- Form -->
                <form class="mb-6" method="POST" action="{{ route('login') }}">
                    
                    <!-- Email -->
                    @csrf
                    <div class="form-group">
                        <label for="email" class="sr-only">Email Address</label>
                        <input id="email" type="email" placeholder="Email"
                               class="form-control  form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                             </span>
                        @endif
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required id="password" placeholder="Enter your password">
                    </div>

                    <div class="form-group d-flex justify-content-between">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" checked="" id="checkbox-remember">
                            <label class="custom-control-label" for="checkbox-remember">Remember me</label>
                        </div>
                        <a href="{{ route('password.request') }}">Reset password</a>
                    </div>

                    <!-- Submit -->
                    <button class="btn btn-lg btn-block btn-primary" type="submit">Sign in</button>
                </form>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
