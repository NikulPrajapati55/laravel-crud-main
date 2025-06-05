<x-admin-dashboard>
    @section('meta')
        <title>Bills</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                                    Add New bils
                                </h2>
                            </div>
                            <div class="d-flex justify-content-center my-3 gap-1">
                                <a href="{{ route('paymentbills') }}" class="btn btn-success">View Payment Detail</a>
                                {{-- <button class="btn btn-success">View Bills</button> --}}
                                <a href="{{ route('bils') }}" class="btn btn-success">All bills</a>
                            </div>
                        </div>
                        <div class="container my-5 d-flex justify-content-center">
                            <div class="col-md-6">
                                <div class="card shadow rounded-4 border-0">
                                    <div class="card-header bg-primary text-white text-center rounded-top-4">
                                        <h4 class="mb-0">Hotel Bill Form</h4>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('billsnew') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="customer_name" class="form-label">Customer Name</label>
                                                <input type="text" class="form-control" id="customer_name"
                                                    name="customer_name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="checkin_date" class="form-label">Check-In Date</label>
                                                <input type="date" class="form-control" id="checkin_date"
                                                    name="checkin_date" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="checkout_date" class="form-label">Check-Out Date</label>
                                                <input type="date" class="form-control" id="checkout_date"
                                                    name="checkout_date" required>
                                            </div>

                                            <div class="mb-3">
                                                <label for="room_number" class="form-label">Room Number</label>
                                                <select name="room_number" id="room_number" class="form-select" required>
                                                    <option value="">Select check-in and check-out date</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Total Days Stayed</label>
                                                <input type="text" id="total_days" class="form-control" readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" id="customer_email" name="customer_email" class="form-control" required>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label">Total Rent (₹2400 per day)</label>
                                                <input type="text" id="total_rent" name="total_rent" class="form-control" readonly>
                                            </div>
                                            <div class="mb-4">
                                                <label for="payment_mode" class="form-label">Payment Mode</label>
                                                <select class="form-select" id="payment_mode" name="payment_mode" required>
                                                    <option value="">Select</option>
                                                    <option value="Cash">Cash</option>
                                                    <option value="Card">Card</option>
                                                    <option value="UPI">UPI</option>
                                                    <option value="Online">Online</option>
                                                </select>
                                            </div>

                                            <div class="text-center">
                                                <button type="submit" class="btn btn-success w-100">Generate Bill</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
    function fetchAvailableRooms() {
        const checkin = $('#checkin_date').val();
        const checkout = $('#checkout_date').val();

        if (checkin && checkout) {
            $.ajax({
                url: "{{ route('available.rooms') }}",
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    checkin_date: checkin,
                    checkout_date: checkout
                },
                success: function (data) {
                    const roomSelect = $('#room_number');
                    roomSelect.empty();
                    if (data.length > 0) {
                        roomSelect.append(`<option value="">Select a room</option>`);
                        data.forEach(room => {
                            roomSelect.append(`<option value="${room}">Room ${room}</option>`);
                        });
                    } else {
                        roomSelect.append('<option value="">No rooms available</option>');
                    }
                },
                error: function () {
                    alert('Error fetching available rooms.');
                }
            });
        }
    }

    $('#checkin_date, #checkout_date').on('change', fetchAvailableRooms);


</script>
    @endsection
</x-admin-dashboard>
