@extends('layouts.frontend.default')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
<div class="empty-state" data-height="400">
    <img src="{{ asset('img/bca.png') }}" class="img-fluid" width="400px">
    <h2><mark>{{ __('Rp. ').number_format($price) }}</mark></h2>
    <p class="lead">
        {{ __('Lakukan pembayaran sejumlah nominal yang sudah 
        ditentukan diatas, dengan menggunakan metode pembayaran bank BCA atas nama') }}
        <u>{{ __('Talentitya Ryzabel.') }}</u>
        {{ __(' Konfirmasi pembayaran akan kami kirimkan via whatsapp, sms, 
        ataupun email yang sudah tertaut sebelumnya.') }}
    </p>
    <a href="#" class="mt-4 bb">
        {{ __('Pembayaran masih belum terkonfirmasi? Hubungi CS kami') }}
    </a>
</div>
@endsection