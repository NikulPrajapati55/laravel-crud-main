<x-admin-dashboard>
    @section('meta')
        <title>Admin Dashboard</title>
    @endsection

    @section('content')
        <section class="section pt-0">
            <div class="wrap-fuild">
                <div class="row">
                    @include('components.hotel-menubar')
                    <div class="col-9 pt-5">
                        <h1 class="mb-4 text-dark">Welcome to Dashboard</h1>
                        {{-- <div class="card shadow-sm">
                            <canvas id="paymentChart" width="300" height="300"></canvas>
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-admin-dashboard>
