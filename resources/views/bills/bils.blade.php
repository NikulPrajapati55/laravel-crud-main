<x-admin-dashboard>
    @section('meta')
        <title>Bills</title>
    @endsection
    @section('content')
        <section class="section pt-0">
            <div class="wrap-fuild">
                <div class="row">
                    @include('components.hotel-menubar')
                    <div class="col-9 pt-5">
                        <div class="bils-detail d-flex justify-content-between">
                            <div class="bils-detail-heding">
                                <h2>
                                    All bills
                                </h2>
                            </div>
                            <div class="d-flex justify-content-center my-3 gap-1">
                                <a href="{{ route('paymentbills') }}" class="btn btn-success">View Payment Detail</a>
                                {{-- <button class="btn btn-success">View Bills</button> --}}
                                <a href="{{ route('addbils') }}" class="btn btn-success">Add New Bill</a>
                            </div>


                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Room Number</th>
                                        <th>Check-In Date</th>
                                        <th>Check-Out Date</th>
                                        <th>Days</th>
                                        <th>Payment Mode</th>
                                        <th>Amount (₹)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($billsdetail as $billsnew)
                                        @php
                                            $days = \Carbon\Carbon::parse($billsnew->checkin_date)->diffInDays(
                                                \Carbon\Carbon::parse($billsnew->checkout_date),
                                            );
                                            if ($days == 0) {
                                                $days = 1;
                                            }
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->iteration + ($billsdetail->currentPage() - 1) * $billsdetail->perPage() }}
                                            </td>
                                            <td>{{ $billsnew->customer_name }}</td>
                                            <td>{{ $billsnew->room_number }}</td>
                                            <td>{{ \Carbon\Carbon::parse($billsnew->checkin_date)->format('d M Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($billsnew->checkout_date)->format('d M Y') }}</td>
                                            <td>{{ $days }}</td>
                                            <td>{{ ucfirst($billsnew->payment_mode) }}</td>
                                            <td>₹{{ number_format($billsnew->amount, 2) }}</td>
                                        </tr>
                                    @endforeach

                                    {{-- Payment Totals --}}
                                    @foreach ($paymentSums as $sum)
                                        <tr class="table-info">
                                            <td colspan="7" class="text-end fw-bold">{{ ucfirst($sum->payment_mode) }}
                                                Total</td>
                                            <td class="fw-bold">₹{{ number_format($sum->total, 2) }}</td>
                                        </tr>
                                    @endforeach

                                    {{-- Grand Total --}}
                                    <tr class="table-success">
                                        <td colspan="7" class="text-end fw-bold">Grand Total</td>
                                        <td class="fw-bold">₹{{ number_format($paymentSums->sum('total'), 2) }}</td>
                                    </tr>
                                </tbody>
                            </table>

                            {{-- Pagination --}}
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div class="text-muted">
                                    Showing {{ $billsdetail->firstItem() }} to {{ $billsdetail->lastItem() }} of
                                    {{ $billsdetail->total() }} entries
                                </div>
                                <div>
                                    {{ $billsdetail->links('pagination::bootstrap-5') }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
</x-admin-dashboard>
