<x-admin-dashboard>
    @section('meta')
    @endsection

    @section('content')
        <section class="section pt-0">
            <div class="row">
                @include('components.hotel-menubar')

                <div class="col-9 mt-5">
                    <div class="product-add mb-4">
                        <h2>Add a Product</h2>
                    </div>

                    <form action="" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="product_name" class="form-label">Product Name</label>
                            <input type="text" id="product_name" name="product_name" class="form-control" required>
                        </div>
                         <div class="mb-3">
                            <label for="product_name" class="form-label">Product Image</label>
                            <input type="file" id="product_img" name="product_img" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Product Category</label>
                            <select id="category" name="category" class="form-control" required>
                                <option value="">-- Select Category --</option>
                                <option value="snacks">Snacks</option>
                                <option value="beverages">Beverages</option>
                                <option value="ice_cream">Ice Cream</option>
                                <option value="toiletries">Toiletries</option>
                                <option value="sunscreen">Sunscreen & Personal Care</option>
                                <option value="stationery">Stationery</option>
                                <option value="souvenirs">Souvenirs</option>
                                <option value="minibar">Minibar Items</option>
                                <option value="others">Others</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="price" class="form-label">Product Price (₹)</label>
                            <input type="number" id="price" name="price" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="stock" class="form-label">Available Quantity</label>
                            <input type="number" id="stock" name="stock" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Add Product</button>
                    </form>

                </div>
            </div>
        </section>
    @endsection
</x-admin-dashboard>
