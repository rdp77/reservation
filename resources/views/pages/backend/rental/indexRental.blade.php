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
                    <th>{{ __('Ruangan') }}</th>
                    <th>{{ __('Paket') }}</th>
                    <th>{{ __('Nama') }}</th>
                    <th>{{ __('Alamat') }}</th>
                    <th>{{ __('Email') }}</th>
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
                        {{ $r->name }}
                    </td>
                    <td>
                        {{-- <div class="btn-group">
                            <form id="reset{{ $u->id }}" action="{{ route('users.reset',$u->id) }}" method="POST"
                        class="d-inline">
                        @csrf
                        <button
                            data-confirm="Apakah Anda Yakin?|Aksi ini tidak 
                                        dapat dikembalikan dan mengubah password menjadi default yaitu '1234567890'. Apakah ingin melanjutkan?"
                            data-confirm-yes="document.getElementById('reset{{ $u->id }}').submit();"
                            class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                        </form>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split"
                            data-toggle="dropdown" aria-expanded="false">
                            <span class="sr-only">{{ __('Toggle Dropdown') }}</span>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start"
                            style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(120px, 36px, 0px);">
                            <a class="dropdown-item" href="{{ route('users.edit',$u->id) }}">
                                {{ __('Edit') }}
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