@include('layouts.backend.components.header')

<body>
    <div id="app">
        <section class="section">
            <div class="d-flex flex-wrap align-items-stretch">
                <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">
                    <div class="p-4 m-3">
                        <img src="{{ asset('logo.png') }}" alt="logo" width="80" class=" mb-5 mt-2">
                        <h4 class="text-dark font-weight-normal">{{ __('Selamat datang di') }}
                            <span class="font-weight-bold">{{ __('Meetpoint') }}</span>
                        </h4>
                        <p class="text-muted">
                            {{ __('Sebelum menyewa tempat, Anda diharuskan untuk 
                            melakukan penyewaan secara online untuk mengecek ketersediaan waktu 
                            dan tempat yang ada') }}
                        </p>
                        @yield('content')
                        <div class="text-center mt-5 text-small">
                            {{ __('Copyright') }}
                            <span style="color: grey">
                                <i class="fas fa-copyright"></i>
                            </span>
                            {{ __('BatuBeling. Made with') }}
                            <span style="color: Tomato;">
                                <i class="fas fa-heart"></i>
                            </span>
                            {{ ('by ') }}
                            <a href="https://wreative.com" title="Wreative" target="_blank">{{ __('Wreative') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom"
                    data-background="{{ asset('bg.jpg') }}">
                    <div class="absolute-bottom-left index-2">
                        <div class="text-light p-5 pb-2">
                            <div class="mb-5 pb-3">
                                <h1 class="mb-2 display-4 font-weight-bold">{{ __('MeetPoint BatuBeling') }}</h1>
                                <h5 class="font-weight-normal text-muted-transparent">
                                    {{ __('Surabaya, Indonesia') }}
                                </h5>
                            </div>
                            {{ __('Photo by') }}
                            <a class="text-light bb" target="_blank" href="https://unsplash.com/photos/a8lTjWJJgLA">
                                {{ __('Justin Kauffman') }}
                            </a>
                            {{ __('on') }}
                            <a class="text-light bb" target="_blank" href="https://unsplash.com">
                                {{ __('Unsplash') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.backend.components.footer')
    @yield('script')
</body>

</html>