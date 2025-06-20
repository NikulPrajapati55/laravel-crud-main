<x-admin-dashboard>
    @section('meta')
        <title>Add Product</title>
    @endsection
    @section('content')
        <section class="section pt-0">
            <div class="wrap-fuild">
                <div class="row">
                    @include('components.hotel-menubar')
                    <div class="col-9 pt-5" style="overflow-y:visible;height:100vh">
                        <div class="section__title">
                            <h1 class="text-dark">Add Product</h1>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="p-4 rounded shadow bg-gradient"
                                    style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); border: 1px solid #e5e7eb;">
                                </div>
                                <form action="{{ route('addproduct') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="name" class="form-label fw-semibold text-primary">Product
                                            Name</label>
                                        <input type="text" class="form-control bg-light" id="name"
                                            name="product_name" required maxlength="255" placeholder="Enter product name">
                                    </div>
                                    <div class="mb-4">
                                       <label for="category" class="form-label fw-semibold text-primary">Category</label>
                                        <select class="form-select bg-light" id="category" name="product_category"
                                            required>
                                            <option value="" disabled selected>Select category</option>
                                            <option value="food">Food</option>
                                            <option value="beverage">Beverage</option>
                                            <option value="room">Room</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label for="img" class="form-label fw-semibold text-primary">Product
                                            Image</label>
                                        <input type="file" class="form-control bg-light" id="img"
                                            name="product_img" accept="image/*" required>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6 mb-3 mb-md-0">
                                            <label for="price" class="form-label fw-semibold text-primary">Price</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light">₱</span>
                                                <input type="number" class="form-control bg-light" id="price"
                                                    name="product_price" step="0.01" min="0" required
                                                    placeholder="0.00">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="total" class="form-label fw-semibold text-primary">Total
                                                Stock</label>
                                            <input type="number" class="form-control bg-light" id="total"
                                                name="product_total" min="0" required
                                                placeholder="Enter total stock">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="status" class="form-label fw-semibold text-primary">Status</label>
                                        <select name="product_status" required>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-lg">Add Product</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $('#addCategoryForm').on('submit', function(e) {
                    e.preventDefault();
                    let categoryName = $(this).find('input[name="category_name"]').val();

                    $.ajax({
                        url: '{{ route('add.category') }}',
                        method: 'POST',
                        data: {
                            category_name: categoryName,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                // Add new category to the dropdown
                                $('#categorySelect').append(
                                    `<option value="${response.category.name}" selected>${response.category.name}</option>`
                                );

                                // Close modal and reset
                                $('#addCategoryModal').modal('hide');
                                $('#addCategoryForm')[0].reset();
                            }
                        },
                        error: function(xhr) {
                            alert("Error: " + xhr.responseJSON.message);
                        }
                    });
                });
            </script>

        </section>
    @endsection
</x-admin-dashboard>
