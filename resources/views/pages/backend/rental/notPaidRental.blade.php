@extends('layouts.backend.default')
@section('title', __('pages.title').__(' | Data Penyewaan'))
@section('titleContent', __('Penyewaan'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Penyewaan') }}</div>
<div class="breadcrumb-item active">{{ __('Belum Membayar') }}</div>
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
                        <a href="{{ route('rental.show',$r->id) }}" class="btn btn-primary btn-action mb-1 mt-1"
                            data-toggle="tooltip" title="Lihat Detail"><i class="fas fa-eye"></i></a>
                        @if ($r->relationDetails->status == 'Belum Lunas')
                        <a href="#" class="btn btn-success btn-action mb-1 mt-1" data-toggle="tooltip"
                            title="Terima Pembayaran"><i class="fas fa-money-bill-alt"></i></a>
                        @elseif($r->check_out == 'Tidak')
                        <a href="#" class="btn btn-success btn-action mb-1 mt-1" data-toggle="tooltip"
                            title="Check-Out"><i class="fas fa-sign-out-alt"></i></a>
                        @endif

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection