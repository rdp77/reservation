<div class="row">
    <div class="col-12">
        <div class="card mb-0">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('rental.index') }}">
                            {{ __('Semua Penyewa') }}
                            <span class="badge badge-white">{{ $rental }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rental.notpayment') }}">
                            {{ __('Belum Bayar') }}
                            <span class="badge badge-primary">{{ $notPayment }}</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rental.payment') }}">
                            {{ __('Sudah Bayar') }}
                            <span class="badge badge-primary">{{ $payment }}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>