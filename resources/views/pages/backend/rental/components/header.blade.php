<div class="row">
    <div class="col-12">
        <div class="card mb-0">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'rental.index' ? 'active' : ''}}"
                            href="{{ route('rental.index') }}">
                            {{ __('Semua Penyewa') }}
                            <span
                                class="badge badge-{{ Request::route()->getName() == 'rental.index' ? 'white' : 'primary'}}">
                                {{ $rental }}
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'rental.notpayment' ? 'active' : ''}}"
                            href="{{ route('rental.notpayment') }}">
                            {{ __('Belum Bayar') }}
                            <span
                                class="badge badge-{{ Request::route()->getName() == 'rental.notpayment' ? 'white' : 'primary'}}">
                                {{ $notPayment }}
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::route()->getName() == 'rental.payment' ? 'active' : ''}}"
                            href="{{ route('rental.payment') }}">
                            {{ __('Sudah Bayar') }}
                            <span
                                class="badge badge-{{ Request::route()->getName() == 'rental.payment' ? 'white' : 'primary'}}">
                                {{ $payment }}
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>