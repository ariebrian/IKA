@extends('layouts.app')

@section('pageTitle', 'Masuk')

@section('content')
<div class="container">
    <!-- <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
          </ul>
    </div> -->
    <body class="bodybg">
		<div class="row justify-content-center">	
				<div class="col-md-8">
                    <div class="card" style="background-color:#ffce22">
                        <div class="card-header">{{ __('Masuk ke Akun IKA Himatif Unpad') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="no_identitas" class="col-sm-4 col-form-label text-md-right">{{ __('Nomor ID') }}</label>

                                    <div class="col-md-6">
                                        <input id="no_identitas" type="text" class="form-control{{ $errors->has('no_identitas') ? ' is-invalid' : '' }}" name="no_identitas" value="{{ old('no_identitas') }}" required autofocus>

                                        @if ($errors->has('no_identitas'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('no_identitas') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 offset-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <label class="form-check-label" for="remember">
                                                {{ __('Ingat Saya') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-secondary">
                                            {{ __('Masuk') }}
                                        </button>

                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</body>
</div>
@endsection
