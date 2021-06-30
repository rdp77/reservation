@extends('layouts.frontend.default')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
<div class="empty-state">
    <div class="empty-state">
        @if ($post->check_out == 'Tidak' && $post->relationDetails->status == 'Belum Lunas')
        <div class="empty-state-icon">
            <i class="fas fa-handshake"></i>
        </div>
        @elseif($post->check_out == 'Tidak' && $post->relationDetails->status == 'Lunas')
        <div class="empty-state-icon bg-info">
            <i class="fas fa-money-bill-wave"></i>
        </div>
        @else
        <div class="empty-state-icon bg-success">
            <i class="fas fa-check"></i>
        </div>
        @endif
        <h2>
            @if ($post->check_out == 'Tidak' && $post->relationDetails->status == 'Belum Lunas')
            {{ __('Anda Sudah Melakukan Pemesanan') }}
            @elseif($post->check_out == 'Tidak' && $post->relationDetails->status == 'Lunas')
            {{ __('Pembayaran Sedang Diprogress') }}
            @else
            {{ __('Anda Sudah Melakukan Check-Out') }}
            @endif
        </h2>
        <a href="#" class="mt-4 bb">
            {{ __('Hubungi CS kami') }}
        </a>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>{{ __('Tanggal') }}</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fas fa-calendar"></i>
                    </div>
                </div>
                <input value="{{ date("d-m-Y", strtotime($post->datetime)) }}" class="form-control" readonly>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>{{ __('Sesi Acara') }}</label>
            <input value="{{ date("h:i", strtotime($post->datetime)) }}" class="form-control" type="time" readonly>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>{{ __('Ruangan') }}</label>
            <input value="{{ $post->relationRoom->name }}" class="form-control" readonly>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>{{ __('Nama') }}</label>
            <input type="text" class="form-control" value="{{ $post->relationDetails->name }}" name="name" readonly>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>{{ __('Alamat') }}</label>
            <input type="text" class="form-control" value="{{ $post->relationDetails->address }}" readonly>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>{{ __('Email') }}</label>
            <input type="email" class="form-control" value="{{ $post->relationDetails->email }}" readonly>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>{{ __('No HP') }}</label>
            <input type="text" class="form-control" value="{{ $post->relationDetails->phone }}" readonly>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>{{ __('WhatsApp') }}</label>
            <div class="selectgroup w-100">
                <label class="selectgroup-item">
                    <input type="radio" class="selectgroup-input"
                        {{ $post->relationDetails->wa == "Ada" ? 'checked' : ''}} disabled>
                    <span class="selectgroup-button">{{ __('Iya') }}</span>
                </label>
                <label class="selectgroup-item">
                    <input type="radio" class="selectgroup-input"
                        {{ $post->relationDetails->wa == "Tidak Ada" ? 'checked' : ''}} disabled>
                    <span class="selectgroup-button">{{ __('Tidak') }}</span>
                </label>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            <label>{{ __('Harga') }}</label>
            <input value="{{ __('Rp. ').$post->relationDetails->price }}" class="form-control" readonly>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            <label>{{ __('Status') }}</label>
            <input type="text" class="form-control" value="{{ $post->relationDetails->status }}" readonly>
        </div>
    </div>
</div>
@endsection