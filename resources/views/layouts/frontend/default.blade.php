@include('layouts.backend.components.header')

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="login-brand">
                    <img src="{{ asset('logo.png') }}" alt="logo" width="120" class="rounded-circle">
                </div>
                <div class="card card-primary">

                    <div class="card-body">
                        @yield('content')
                    </div>
                </div>
                <div class="simple-footer">
                    @include('layouts.backend.components.footer')
                </div>

            </div>
        </section>
    </div>
    @include('layouts.backend.components.footer')
    @yield('script')
</body>

</html>