@extends('layouts.backend.default')
@section('title', __('pages.title').__(' | Data Penyewaan'))
@section('titleContent', __('Penyewaan'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Penyewaan') }}</div>
<div class="breadcrumb-item active">{{ __('Semua Penyewa') }}</div>
@endsection

@section('content')
@include('layouts.backend.components.notification')
@include('pages.backend.rental.components.header')
<div class="card mt-3">
    <div class="card-body">
        <table class="table-striped table" id="tables" width="100%">
            <thead>
                <tr>
                    <th class="text-center">
                        {{ __('NO') }}
                    </th>
                    <th class="text-center">
                        {{ __('Kode') }}
                    </th>
                    <th>{{ __('Tanggal') }}</th>
                    <th>{{ __('Jam') }}</th>
                    <th>{{ __('Ruangan') }}</th>
                    <th>{{ __('Paket') }}</th>
                    <th>{{ __('Nama') }}</th>
                    <th>{{ __('No HP') }}</th>
                    <th>{{ __('Harga') }}</th>
                    <th>{{ __('Status') }}</th>
                    <th>{{ __('Aksi') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservation as $number => $r)
                <tr>
                    <td class="text-center">
                        {{ $number+1 }}
                    </td>
                    <td class="text-center">
                        {{ $r->code }}
                    </td>
                    <td>
                        {{ date("d-m-Y", strtotime($r->datetime)) }}
                    </td>
                    <td>
                        {{ date("h:i", strtotime($r->datetime)) }}
                    </td>
                    <td>
                        {{ $r->relationRoom->name }}
                    </td>
                    <td>
                        {{ $r->package }}
                    </td>
                    <td>
                        {{ $r->relationDetails->name }}
                    </td>
                    <td>
                        {{ $r->relationDetails->phone }}
                        @if ($r->relationDetails->wa == 'Ada')
                        <span class="badge badge-info">
                            {{ __('Whatsapp') }}
                        </span>
                        @endif
                    </td>
                    <td>
                        {{ __('Rp. ').number_format($r->relationDetails->price) }}
                    </td>
                    <td>
                        {{ $r->relationDetails->status }}
                    </td>
                    <td>
                        <div class="btn-group">
                            <a href="{{ route('rental.show',$r->id) }}" class="btn btn-primary">
                                {{ __('Lihat Detail') }}
                            </a>
                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                                data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
                            </button>
                            <div class="dropdown-menu" x-placement="bottom-start"
                                style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(120px, 36px, 0px);">
                                <a href="{{ url('status').__('/').Str::slug($r->code) }}" class="dropdown-item"
                                    target="_blank">
                                    {{ __('Lihat Halaman') }}
                                </a>
                                @if ($r->relationDetails->status == 'Belum Lunas')
                                <form id="acc-{{ $r->id }}" action="{{ route('reservation.paid',$r->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    <a class="dropdown-item" style="cursor: pointer" data-confirm="Terima pembayaran?|Aksi ini 
                                    akan menyetujui pembayaran dan tidak dapat dikembalikan. Apakah ingin melanjutkan?"
                                        data-confirm-yes="document.getElementById('acc-{{ $r->id }}').submit();">
                                        {{ __('Terima Pembayaran') }}
                                    </a>
                                </form>
                                @elseif($r->check_out == 'Tidak')
                                <form id="co-{{ $r->id }}" action="{{ route('reservation.checkout',$r->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    <a class="dropdown-item" style="cursor: pointer" data-confirm="Apakah yakin akan melakukan check-out?|Aksi ini tidak dapat dikembalikan. 
                                        Apakah ingin melanjutkan?"
                                        data-confirm-yes="document.getElementById('co-{{ $r->id }}').submit();">
                                        {{ __("Check-Out") }}
                                    </a>
                                </form>
                                @endif
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection