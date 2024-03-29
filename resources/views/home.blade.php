@extends('layouts.frontend.home')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
@include('layouts.backend.components.notification')
<form method="POST" action="{{ route('reservation.check') }}">
    @csrf
    <div class="form-group">
        <label>{{ __('Tanggal') }}</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fas fa-calendar"></i>
                </div>
            </div>
            <input class="form-control datepicker" name="tgl" tabindex="1" required>
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
        <input class="form-control" type="time" min="06:00" max="24:00" name="session" tabindex="2" required>
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

    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right" tabindex="4">
            {{ __('Sewa Tempat') }}
        </button>
    </div>
</form>
@endsection