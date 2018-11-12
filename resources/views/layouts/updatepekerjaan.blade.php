@extends('layouts.app')

@section('pageTitle', 'Perbarui Pekerjaan')

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
                <div class="card-header">{{ __('Perbarui Pekerjaan') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('update_profile') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Perusahaan') }}</label>

                            <div class="col-md-6">
                                <input id="nama" type="text" class="form-control{{ $errors->has('nama_tempat') ? ' is-invalid' : '' }}" name="nama_tempat" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Perusahaan') }}</label>

                            <div class="col-md-6">
                                <textarea id="alamat" type="text" class="form-control{{ $errors->has('alamat_kerja') ? ' is-invalid' : '' }}" name="alamat_kerja" rows="4"></textarea>
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