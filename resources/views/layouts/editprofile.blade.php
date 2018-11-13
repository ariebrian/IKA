@extends('layouts.app')

@section('pageTitle', 'Isi Profil')

@section('content')
<div class="container">
    <!-- <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)

              <li>{{ $error }}</li>

              @endforeach
          </ul>
    </div> -->
    @if (Auth::user()->role == 'mahasiswa')
        <div class="row justify-content-center">
            <div class="col-md-8" id="form-mhs">
                <div class="card" style="background-color:#ffce22">
                    <div class="card-header">{{ __('Isi Profil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('fill_profile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="npm" class="col-md-4 col-form-label text-md-right">{{ __('Nomor ID') }}</label>

                                <div class="col-md-6">
                                    <input id="npm" type="text" class="form-control{{ $errors->has('no_identitas') ? ' is-invalid' : '' }}" name="no_identitas" value="{{ Auth::user()->no_identitas }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ Auth::user()->nama }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" class="form-control{{ $errors->has('jenis_kelamin') ? ' is-invalid' : '' }}" name="jenis_kelamin" required autofocus>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>

                                @if ($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="tgl" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="tgl" type="date" class="form-control{{ $errors->has('mhs_tgl_lahir') ? ' is-invalid' : '' }}" name="mhs_tgl_lahir" required>

                                    @if ($errors->has('mhs_tgl_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_tgl_lahir') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Tinggal') }}</label>

                                <div class="col-md-6">
                                    <textarea rows="4" id="alamat" type="text" class="form-control{{ $errors->has('mhs_alamat_rmh') ? ' is-invalid' : '' }}" name="mhs_alamat_rmh" required>
                                    @if ($errors->has('mhs_alamat_rmh'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_alamat_rmh') }}</strong>
                                        </span>
                                    @endif
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="angkatan" class="col-md-4 col-form-label text-md-right">{{ __('Angkatan') }}</label>

                                <div class="col-md-6">
                                    <input id="angkatan" type="text" class="form-control{{ $errors->has('mhs_angkatan') ? ' is-invalid' : '' }}" name="mhs_angkatan" value="20{{substr(Auth::user()->no_identitas,6,2)}}" readonly>
                                    20{{substr(Auth::user()->no_identitas,6,2)}}
                                    @if ($errors->has('mhs_angkatan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_angkatan') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="peminatan" class="col-md-4 col-form-label text-md-right">{{ __('Peminatan') }}</label>

                                <div class="col-md-6">
                                    <select id="peminatan" class="form-control{{ $errors->has('mhs_peminatan') ? ' is-invalid' : '' }}" name="mhs_peminatan">
                                        <option value="Belum">Belum Memiliki Bidang Minat</option>
                                        <option value="SI">Sistem Informasi dan Rekayasa Perangkat Lunak (SIRPL)</option>
                                        <option value="AI">Sistem Cerdas dan Sistem Grafika (SCSG)</option>
                                        <option value="JK">Jaringan Komputer dan Komunikasi Data (JKKD)</option>
                                    </select>

                                    @if ($errors->has('mhs_peminatan'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mhs_peminatan') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="thn_lulus" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Kelulusan') }}</label>

                                <div class="col-md-6">
                                    <select id="thn_lulus" class="form-control{{ $errors->has('mhs_thn_lulus') ? ' is-invalid' : '' }}" name="mhs_thn_lulus" value="{{ old('thn_lulus') }}">
                                        <option value="">Belum Lulus</option>
                                        @for ($i = 2015; $i<=2020; $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>

                                    @if ($errors->has('mhs_thn_lulus'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_thn_lulus') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="skripsi" class="col-md-4 col-form-label text-md-right">{{ __('Judul Skripsi') }}</label>

                                <div class="col-md-6">
                                    <input id="skripsi" type="text" class="form-control{{ $errors->has('mhs_skripsi') ? ' is-invalid' : '' }}" name="mhs_skripsi" >

                                    @if ($errors->has('mhs_skripsi'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_skripsi') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_wa" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="no_wa" type="text" class="form-control{{ $errors->has('mhs_no_wa') ? ' is-invalid' : '' }}" name="mhs_no_wa">

                                    @if ($errors->has('mhs_no_wa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_no_wa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('LinkedIn') }}</label>

                                <div class="col-md-6">
                                    <input id="linkedin" type="url" class="form-control{{ $errors->has('mhs_linkedin') ? ' is-invalid' : '' }}" name="mhs_linkedin">

                                    @if ($errors->has('mhs_linkedin'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('mhs_linkedin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Kirim') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row justify-content-center">
            <div class="col-md-8" id="form-dsn">
                <div class="card" style="background-color:#ffce22">
                    <div class="card-header">{{ __('Isi Profil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('fill_profile') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="nip" class="col-md-4 col-form-label text-md-right">{{ __('Nomor ID') }}</label>

                                <div class="col-md-6">
                                    <input id="nip" type="text" class="form-control{{ $errors->has('no_identitas') ? ' is-invalid' : '' }}" name="no_identitas" value="{{ Auth::user()->no_identitas }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

                                <div class="col-md-6">
                                    <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ Auth::user()->nama }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                                <div class="col-md-6">
                                    <select id="gender" class="form-control{{ $errors->has('jenis_kelamin') ? ' is-invalid' : '' }}" name="jenis_kelamin" required autofocus>
                                        <option value="Pria">Pria</option>
                                        <option value="Wanita">Wanita</option>
                                    </select>

                                @if ($errors->has('jenis_kelamin'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="tgl" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Lahir') }}</label>

                                <div class="col-md-6">
                                    <input id="tgl" type="date" class="form-control{{ $errors->has('dsn_tgl_lahir') ? ' is-invalid' : '' }}" name="dsn_tgl_lahir" required>

                                    @if ($errors->has('dsn_tgl_lahir'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dsn_tgl_lahir') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('Alamat Tinggal') }}</label>

                                <div class="col-md-6">
                                    <input id="alamat" type="text" class="form-control{{ $errors->has('dsn_alamat_rmh') ? ' is-invalid' : '' }}" name="dsn_alamat_rmh" required>
                                    @if ($errors->has('dsn_alamat_rmh'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dsn_alamat_rmh') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Alamat E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="no_wa" class="col-md-4 col-form-label text-md-right">{{ __('Nomor Telepon') }}</label>

                                <div class="col-md-6">
                                    <input id="no_wa" type="text" class="form-control{{ $errors->has('dsn_no_wa') ? ' is-invalid' : '' }}" name="dsn_no_wa" required>

                                    @if ($errors->has('dsn_no_wa'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dsn_no_wa') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="linkedin" class="col-md-4 col-form-label text-md-right">{{ __('LinkedIn') }}</label>

                                <div class="col-md-6">
                                    <input id="linkedin" type="url" class="form-control{{ $errors->has('dsn_linkedin') ? ' is-invalid' : '' }}" name="mhs_linkedin" required>

                                    @if ($errors->has('dsn_linkedin'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('dsn_linkedin') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Kirim') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection