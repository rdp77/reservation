@extends('layouts.frontend.default')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
<div class="empty-state" data-height="400">
    <img src="{{ asset('img/bca.png') }}" class="img-fluid" width="400px">
    <h2><mark>{{ __('Rp. ').number_format($price) }}</mark></h2>
    <p class="lead">
        {{ __('Lakukan pembayaran sejumlah nominal yang sudah 
        ditentukan diatas, menggunakan metode pembayaran bank BCA atas nama') }}
        <u>{{ __('Talentitya Ryzabella Insani') }}</u>
        {{ __(' dengan No Rekening ') }}
        <mark>{{ __('01015781') }}</mark>
        {{ __('. Konfirmasi pembayaran akan kami kirimkan via whatsapp, sms, 
        ataupun email yang sudah tertaut sebelumnya. Kode pemesanan') }}
        <mark>{{ $code }}</mark>
        {{ __(' dan bisa diakses melalui url ') }}
        <a href="{{ url('status').__('/').Str::slug($code) }}" target="_blank">
            {{ __('ini') }}
        </a>
    </p>
    <a href="https://api.whatsapp.com/send?phone=6282330620982" class="mt-4 bb" target="_blank">
        {{ __('Pembayaran masih belum terkonfirmasi? Hubungi CS kami') }}
    </a>
</div>
@endsection