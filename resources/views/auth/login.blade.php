@extends('layouts.navbar')

@section('content')
<section class="login">
    <div class="container">
        <div class="row justify-content-sm-center">
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-7 col-sm-9 mt-5">
                <h1>KEARSIPAN KEPEGAWAIAN</h1>
                <h2 class="text-center">PT UNILEVER Tbk.</h2>
                <div class="shadow-lg">
                    <div class="p-5">
                        <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                        <form method="POST" class="needs-validation" novalidate="" autocomplete="off" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-2 text-muted" for="email">{{ __('Email Address or Username') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="mb-2 w-100">
                                    <label class="text-muted" for="password">{{ __('Password') }}</label>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-flex align-items-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection