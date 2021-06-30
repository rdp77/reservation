@extends('layouts.backend.default')
@section('title', __('pages.title').__(' | Detail Penyewaan'))
@section('backContent')
<div class="section-header-back">
    <a href="{{ route('rental.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
</div>
@endsection
@section('titleContent', __('Penyewaan'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Penyewaan') }}</div>
<div class="breadcrumb-item active">{{ __('Detail Penyewa') }}</div>
@endsection

@section('content')
<h2 class="section-title">{{ $reservation->code.__(' (').$reservation->package.__(')') }}</h2>
<p class="section-lead">{{ __('Kode ini digunakan untuk mengindetifikasi setiap pesanan yang ada') }}</p>
<div class="card mt-3">
    <div class="card-body">
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
                        <input value="{{ date("d-m-Y", strtotime($reservation->datetime)) }}" class="form-control"
                            readonly>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Sesi Acara') }}</label>
                    <input value="{{ date("h:i", strtotime($reservation->datetime)) }}" class="form-control" type="time"
                        readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Ruangan') }}</label>
                    <input value="{{ $reservation->relationRoom->name }}" class="form-control" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Nama') }}</label>
                    <input type="text" class="form-control" value="{{ $reservation->relationDetails->name }}"
                        name="name" readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Alamat') }}</label>
                    <input type="text" class="form-control" value="{{ $reservation->relationDetails->address }}"
                        readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Email') }}</label>
                    <input type="email" class="form-control" value="{{ $reservation->relationDetails->email }}"
                        readonly>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label>{{ __('No HP') }}</label>
                    <input type="text" class="form-control" value="{{ $reservation->relationDetails->phone }}" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('WhatsApp') }}</label>
                    <div class="selectgroup w-100">
                        <label class="selectgroup-item">
                            <input type="radio" class="selectgroup-input"
                                {{ $reservation->relationDetails->wa == "Ada" ? 'checked' : ''}} disabled>
                            <span class="selectgroup-button">{{ __('Iya') }}</span>
                        </label>
                        <label class="selectgroup-item">
                            <input type="radio" class="selectgroup-input"
                                {{ $reservation->relationDetails->wa == "Tidak Ada" ? 'checked' : ''}} disabled>
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
                    <input value="{{ __('Rp. ').$reservation->relationDetails->price }}" class="form-control" readonly>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label>{{ __('Status') }}</label>
                    <input type="text" class="form-control" value="{{ $reservation->relationDetails->status }}"
                        readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection