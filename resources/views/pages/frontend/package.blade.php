@extends('layouts.frontend.default')
@section('title', __('pages.title'))
@section('titleContent', __('auth.login'))

@section('content')
<div class="row">
    <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
            <div class="pricing-title">
                {{ __('Paket Ngerii') }}
            </div>
            <div class="pricing-padding">
                <div class="pricing-price">
                    <div>{{ __('150K') }}</div>
                    <div>{{ __('4 Orang') }}</div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('1 Ekor Ayam Kampung Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('1 Ekor Bebek Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Nasi Putih') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Lalapan Godonk Telo & Sambel') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Urap Urap') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Tahu & Tempe') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Free Es Teh / Es Jeruk (Free Refill)') }}</div>
                    </div>
                </div>
            </div>
            <div class="pricing-cta">
                <a href="#">{{ __('Pilih') }} <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
            <div class="pricing-title">
                {{ __('Paket Nggragas "A"') }}
            </div>
            <div class="pricing-padding">
                <div class="pricing-price">
                    <div>{{ __('200K') }}</div>
                    <div>{{ __('10 Orang') }}</div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('10 Porsi Soto Daging / Campur') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('10 Porsi Nasi Putih') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Kerupuk') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Free Es Teh / Es Cao (Free Refill)') }}</div>
                    </div>
                </div>
            </div>
            <div class="pricing-cta">
                <a href="#">{{ __('Pilih') }} <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
            <div class="pricing-title">
                {{ __('Paket Nggragas "B"') }}
            </div>
            <div class="pricing-padding">
                <div class="pricing-price">
                    <div>{{ __('250K') }}</div>
                    <div>{{ __('10 Orang') }}</div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('10 Porsi Soto Kikil') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('10 Porsi Nasi Putih / Lontong') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Kerupuk') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Free Es Teh / Es Cao (Free Refill)') }}</div>
                    </div>
                </div>
            </div>
            <div class="pricing-cta">
                <a href="#">{{ __('Pilih') }} <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
            <div class="pricing-title">
                {{ __('Paket Nggragas "C"') }}
            </div>
            <div class="pricing-padding">
                <div class="pricing-price">
                    <div>{{ __('350K') }}</div>
                    <div>{{ __('10 Orang') }}</div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('2 Ekor Ayam Kampung Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('1 Ekor Bebek Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Nasi Putih') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Lalapan Godonk Telo & Sambel') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Urap Urap') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Tahu & Tempe') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Free Es Teh / Es Cao (Free Refill)') }}</div>
                    </div>
                </div>
            </div>
            <div class="pricing-cta">
                <a href="#">{{ __('Pilih') }} <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
            <div class="pricing-title">
                {{ __('Paket Nggragas "D"') }}
            </div>
            <div class="pricing-padding">
                <div class="pricing-price">
                    <div>{{ __('500K') }}</div>
                    <div>{{ __('10 Orang') }}</div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('2 Ekor Ayam Kampung Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('2 Ekor Bebek Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('5 Ekor Lele') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Nasi Putih') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Lalapan Godonk Telo & Sambel') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Urap Urap') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Tahu & Tempe') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Ati Ampela') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Free Es Teh / Es Cao (Free Refill)') }}</div>
                    </div>
                </div>
            </div>
            <div class="pricing-cta">
                <a href="#">{{ __('Pilih') }} <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
            <div class="pricing-title">
                {{ __('Paket Nggragas "E"') }}
            </div>
            <div class="pricing-padding">
                <div class="pricing-price">
                    <div>{{ __('750K') }}</div>
                    <div>{{ __('10 Orang') }}</div>
                </div>
                <div class="pricing-details">
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('2 Ekor Ayam Kampung Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('2 Ekor Bebek Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('5 Porsi Empal Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('5 Ekor Lele') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Nasi Putih') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Lalapan Godonk Telo & Sambel') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Tahu & Tempe') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Ati Ampela') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('2 Porsi Kentang Goreng') }}</div>
                    </div>
                    <div class="pricing-item">
                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                        <div class="pricing-item-label">{{ __('Free Es Teh / Es Cao (Free Refill)') }}</div>
                    </div>
                </div>
            </div>
            <div class="pricing-cta">
                <a href="#">{{ __('Pilih') }} <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection