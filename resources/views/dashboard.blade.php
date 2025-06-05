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
                        <div class="card shadow-sm">
                            <div class="card-body">
                              {{-- <div class="chart ">
                                        <canvas id="paymentChart"></canvas>
                                    </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('paymentChart').getContext('2d');

            const paymentChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: {!! json_encode($paymentSums->pluck('payment_mode')) !!},
                    datasets: [{
                        label: 'Total Amount',
                        data: {!! json_encode($paymentSums->pluck('total')) !!},
                        backgroundColor: [
                            '#0d6efd', '#198754', '#ffc107', '#dc3545', '#6f42c1'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return '₹ ' + context.raw.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });
        </script> --}}
    @endsection
</x-admin-dashboard>
