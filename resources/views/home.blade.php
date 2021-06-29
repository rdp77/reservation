@extends('layouts.frontend.home')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
<form method="POST" action="{{ route('reservation.check') }}" class="needs-validation">
    @csrf
    <div class="form-group">
        <label>{{ __('Tanggal') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
            <input class="form-control datepicker" name="tgl" tabindex="1" required autofocus>
        </div>
        @error('tgl')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <div class="d-block">
            <label class="control-label">{{ __('Sesi Acara') }}</label>
        </div>
        <input class="form-control" type="time" name="session" tabindex="2" required>
        @error('session')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group">
        <div class="d-block">
            <label class="control-label">{{ __('Ruangan') }}</label>
        </div>
        <select class="form-control selectric" name="room" tabindex="3" required>
            @foreach ($room as $r)
            <option value="{{ $r->id }}">
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

    {{-- <div class="form-group">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                id="remember-me">
            <label class="custom-control-label" for="remember-me">Remember Me</label>
        </div>
    </div> --}}

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
            {{ __('Sewa Tempat') }}
        </button>
    </div>

    {{-- <div class="mt-5 text-center">
        Don't have an account? <a href="auth-register.html">Create new one</a>
    </div> --}}
</form>
@endsection