<x-admin-dashboard>
    @section('meta')
        <title>Payment Summary</title>
    @endsection

    @section('content')
        <section class="section pt-2">
            <div class="wrap">
                <div class="row">
                    @include('components.hotel-menubar')

                    <div class="col-9 mt-2">
                        <div class="bils-detail d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">Payment Summary</h2>
                            <div class="d-flex gap-2">
                                <a href="{{ route('addbils') }}" class="btn btn-success">Add New Bill</a>
                                <a href="{{ route('bils') }}" class="btn btn-primary">View All Bills</a>
                            </div>
                        </div>
                        <div class="card-header bg-dark text-white mt-4">
                            <strong>Payment Mode Distribution</strong>
                        </div>
                        <div class="card shadow-sm">
                            <div class="row">

                                <div class="col-6">
                                    <div class="chart ">
                                        <canvas id="paymentChart"></canvas>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="total-amount my-4">
                                        <div class="card shadow-sm">
                                            <div class="card-header bg-primary text-white">
                                                <h5 class="mb-0">Payment Summary</h5>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <table class="table table-bordered table-hover mb-0">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th colspan="7" class="text-end">Payment Mode</th>
                                                        <th>Total Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($paymentSums as $sum)
                                                        <tr class="table-info">
                                                            <td colspan="7" class="text-end fw-bold">
                                                                {{ ucfirst($sum->payment_mode) }} Total
                                                            </td>
                                                            <td class="fw-bold text-success">
                                                                ₹{{ number_format($sum->total, 0) }}</td>
                                                        </tr>
                                                    @endforeach
                                                    <tr class="table-success">
                                                        <td colspan="7" class="text-end fw-bold">Grand Total
                                                        </td>
                                                        <td class="fw-bold text-primary">
                                                            ₹{{ number_format($paymentSums->sum('total'), 0) }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
        </script>
    @endsection
</x-admin-dashboard>
