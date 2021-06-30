@extends('layouts.backend.default')
@section('title', __('pages.title').__(' | Data Penyewaan'))
@section('titleContent', __('Penyewaan'))
@section('breadcrumb', __('Data'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Penyewaan') }}</div>
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
                    {{-- <th>{{ __('Alamat') }}</th>
                    <th>{{ __('Email') }}</th> --}}
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
                    {{-- <td>
                        {{ $r->relationDetails->address }}
                    </td>
                    <td>
                        {{ $r->relationDetails->email }}
                    </td> --}}
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
                        {{-- <div class="btn-group">
                            <a href="#" class="btn btn-primary">
                                {{ __('Lihat Detail') }}
                        </a>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start"
                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(120px, 36px, 0px);">
                            <a class="dropdown-item" href="#">
                                {{ __('Terima Pembayaran') }}
                            </a>
                            <form id="del-data{{ $u->id }}" action="{{ route('users.destroy',$u->id) }}" method="POST"
                                class="d-inline">
                                @csrf
                                @method('DELETE')
                                <a class="dropdown-item" style="cursor: pointer" data-confirm="Apakah Anda Yakin?|Aksi ini tidak dapat 
                                                dikembalikan. Apakah ingin melanjutkan?"
                                    data-confirm-yes="document.getElementById('del-data{{ $u->id }}').submit();">
                                    {{ __('Hapus') }}
                                </a>
                            </form>
                        </div>
    </div> --}}
    </td>
    </tr>
    @endforeach
    </tbody>
    </table>
</div>
</div>
@endsection