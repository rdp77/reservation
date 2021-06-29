@extends('layouts.frontend.default')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
<h2 class="section-title">{{ $code.__(' (').$package.__(')') }}</h2>
<p class="section-lead">{{ __('Kode ini digunakan untuk mengindetifikasi setiap pesanan yang ada') }}</p>
<input type="hidden" name="code" value="{{ $code }}">
<input type="hidden" name="package" value="{{ $package }}">
<div class="card-body">
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>{{ __('Tanggal') }}<code>*</code></label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fas fa-calendar"></i>
                        </div>
                    </div>
                    <input value="{{ date("Y-m-d", strtotime($date)) }}"
                        class="form-control datepicker @error('tgl') is-invalid @enderror" name="tgl" required
                        autofocus>
                </div>
                @error('tgl')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>{{ __('Sesi Acara') }}<code>*</code></label>
                <input value="{{ date("h:i", strtotime($date)) }}"
                    class="form-control @error('time') is-invalid @enderror" type="time" name="session" required>
                @error('session')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>{{ __('Ruangan') }}<code>*</code></label>
                <select class="form-control selectric @error('room') is-invalid @enderror" name="room" required>
                    @foreach ($rooms as $r)
                    <option value="{{ $r->id }}" {{ $r->id == $room ? 'selected' : '' }}>
                        {{ $r->name }}
                    </option>
                    @endforeach
                </select>
                @error('room')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>{{ __('Nama') }}<code>*</code></label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
                    autocomplete="name">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>{{ __('Alamat') }}</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>{{ __('Email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label>{{ __('No HP') }}<code>*</code></label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                @error('phone')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
        <div class="col">
            <div class="form-group">
                <label>{{ __('WhatsApp') }}<code>*</code></label>
                <div class="selectgroup w-100">
                    <label class="selectgroup-item">
                        <input type="radio" name="wa" value="1" class="selectgroup-input" checked>
                        <span class="selectgroup-button">{{ __('Iya') }}</span>
                    </label>
                    <label class="selectgroup-item">
                        <input type="radio" name="wa" value="0" class="selectgroup-input">
                        <span class="selectgroup-button">{{ __('Tidak') }}</span>
                    </label>
                </div>
                @error('wa')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card-footer text-right">
    <button class="btn btn-primary mr-1" type="submit">{{ __('Lanjut Ke Pembayaran') }}</button>
</div>

@endsection