@extends('layouts.app')

@section('pageTitle', 'Forum')

@section('content')
<div class="container">
    <!-- <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

              @endforeach
          </ul>
    </div> -->
    <div class="row justify-content-center">
        <div class="col-md-8" id="form-mhs">
            <div class="card" style="background-color:#ffce22">
                <div class="card-header">{{ __('Mulai Sebuah Forum') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update_work') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul Forum') }}</label>

                            <div class="col-md-6">
                                <input id="judul" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="judul" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="konten" class="col-md-4 col-form-label text-md-right">{{ __('Konten') }}</label>

                            <div class="col-md-6">
                                <textarea id="konten" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="deskripsi" rows="6"></textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Perbarui') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection