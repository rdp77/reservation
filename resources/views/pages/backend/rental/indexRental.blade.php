@extends('layouts.backend.default')
@section('title', __('pages.title').__(' | Master Pengguna'))
@section('titleContent', __('Pengguna'))
@section('breadcrumb', __('Master'))
@section('morebreadcrumb')
<div class="breadcrumb-item active">{{ __('Pengguna') }}</div>
@endsection

@section('content')
@include('layouts.backend.components.notification')
<div class="row">
    <div class="col-12">
        <div class="card mb-0">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            {{ __('Semua Penyewa') }}
                            <span class="badge badge-white">5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Belum Bayar') }}
                            <span class="badge badge-primary">1</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            {{ __('Sudah Bayar') }}
                            <span class="badge badge-primary">1</span>
                            2</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="card mt-3">
    <div class="card-body">

    </div>
</div>
@endsection