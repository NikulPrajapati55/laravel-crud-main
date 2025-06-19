<x-admin-dashboard>
    @section('meta')
        <title>All Product</title>
    @endsection
    @section('content')
        <section class="section section--employe pt-0">
            <div class="wrap-fuild">
                <div class="row justify-content-center">
                    @include('components.hotel-menubar')
                    <div class="col-9 pt-5">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="section__title">
                                <h1 class="text-dark">All Product</h1>
                            </div>
                            <div>
                                <a href="{{ route('newproduct') }}" class="btn btn-primary btn--hover-orange">Add new
                                    product</a>
                            </div>
                        </div>
                        @foreach ($allproduct as $category => $items)
                            <div class="card mb-5 shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h2 class="mb-0">Category: {{ $category }}</h2>
                                </div>
                                <div class="card-body">
                                    {{-- Active Products --}}
                                    <h4 class="text-success">Active Products</h4>
                                    @php
                                        $active = $items->where('product_status', 1);
                                    @endphp
                                    @if ($active->count())
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped align-middle">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($active as $product)
                                                        <tr>
                                                            <td>{{ $product->product_name }}</td>
                                                            <td>
                                                                @if ($product->product_img)
                                                                    <img src="{{ asset('storage/' . ltrim($product->product_img, '/')) }}"
                                                                        width="80" class="img-thumbnail"
                                                                        alt="{{ $product->product_name }}">
                                                                @else
                                                                    <span class="text-muted">No image</span>
                                                                @endif
                                                            </td>
                                                            <td>₹{{ number_format($product->product_price, 2) }}</td>
                                                            <td>{{ $product->product_total }}</td>
                                                            <td>
                                                                <!-- Edit -->
                                                                <button class="btn btn-sm btn-warning edit-btn"
                                                                    data-id="{{ $product->id }}">Edit</button>
                                                                <!-- Delete -->
                                                                <button class="btn btn-sm btn-danger delete-btn"
                                                                    data-id="{{ $product->id }}">Delete</button>
                                                                <!-- Edit Product Modal -->
                                                                <div class="modal fade" id="editProductModal" tabindex="-1"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <form id="editProductForm">
                                                                            @csrf
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h5 class="modal-title">Edit Product
                                                                                    </h5>
                                                                                    <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"></button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <input type="hidden" id="edit_id">
                                                                                    <div class="mb-3">
                                                                                        <label>Name</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="product_name"
                                                                                            id="edit_name">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label>Price</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            name="product_price"
                                                                                            id="edit_price">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label>Total</label>
                                                                                        <input type="number"
                                                                                            class="form-control"
                                                                                            name="product_total"
                                                                                            id="edit_total">
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label>Status</label>
                                                                                        <select class="form-control"
                                                                                            name="product_status"
                                                                                            id="edit_status">
                                                                                            <option value="1">Active
                                                                                            </option>
                                                                                            <option value="0">Inactive
                                                                                            </option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary">Save
                                                                                        Changes</button>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="text-muted">No active products.</p>
                                    @endif

                                    {{-- Inactive Products --}}
                                    <h4 class="text-danger mt-4">Inactive Products</h4>
                                    @php
                                        $inactive = $items->where('product_status', 0);
                                    @endphp
                                    @if ($inactive->count())
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-striped align-middle">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Image</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($inactive as $product)
                                                        <tr>
                                                            <td>{{ $product->product_name }}</td>
                                                            <td>
                                                                @if ($product->product_img)
                                                                    <img src="{{ asset('storage/' . ltrim($product->product_img, '/')) }}"
                                                                        width="80" class="img-thumbnail"
                                                                        alt="{{ $product->product_name }}">
                                                                @else
                                                                    <span class="text-muted">No image</span>
                                                                @endif
                                                            </td>
                                                            <td>₹{{ number_format($product->product_price, 2) }}</td>
                                                            <td>{{ $product->product_total }}</td>
                                                            <td>
                                                                 <button class="btn btn-sm btn-warning edit-btn"
                                                                    data-id="{{ $product->id }}">Edit</button>
                                                                <!-- Delete -->
                                                                <button class="btn btn-sm btn-danger delete-btn"
                                                                    data-id="{{ $product->id }}">Delete</button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    @else
                                        <p class="text-muted">No inactive products.</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
$(document).ready(function () {

    // EDIT BUTTON CLICK
    $('.edit-btn').on('click', function () {
        let id = $(this).data('id');
        $.get("/product/edit/" + id, function (data) {
            $('#edit_id').val(data.id);
            $('#edit_name').val(data.product_name);
            $('#edit_price').val(data.product_price);
            $('#edit_total').val(data.product_total);
            $('#edit_status').val(data.product_status);
            $('#editProductModal').modal('show');
        });
    });

    // SUBMIT UPDATE FORM
    $('#editProductForm').submit(function (e) {
        e.preventDefault();
        let id = $('#edit_id').val();
        $.ajax({
            url: "/product/update/" + id,
            method: "POST",
            data: $(this).serialize(),
            success: function (res) {
                $('#editProductModal').modal('hide');
                location.reload(); // or update the row dynamically
            },
            error: function () {
                alert("Update failed.");
            }
        });
    });

    // DELETE
    $('.delete-btn').on('click', function () {
        if (!confirm("Are you sure?")) return;
        let id = $(this).data('id');
        $.ajax({
            url: "/product/delete/" + id,
            type: "DELETE",
            data: {
                _token: "{{ csrf_token() }}"
            },
            success: function (res) {
                location.reload(); // or remove row from DOM
            },
            error: function () {
                alert("Delete failed.");
            }
        });
    });

});
</script>

    @endsection
</x-admin-dashboard>
