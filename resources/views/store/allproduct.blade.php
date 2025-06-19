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
                                <a href="{{ route('addproduct') }}" class="btn btn-primary btn--hover-orange">Add new product</a>
                            </div>
                        </div>
                        @foreach($allproduct as $category => $items)
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
                                    @if($active->count())
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
                                                    @foreach($active as $product)
                                                        <tr>
                                                            <td>{{ $product->product_name }}</td>
                                                            <td>
                                                                @if($product->product_img)
                                                                    <img src="{{ asset('storage/' . ltrim($product->product_img, '/')) }}" width="80" class="img-thumbnail" alt="{{ $product->product_name }}">
                                                                @else
                                                                    <span class="text-muted">No image</span>
                                                                @endif
                                                            </td>
                                                            <td>₹{{ number_format($product->product_price, 2) }}</td>
                                                            <td>{{ $product->product_total }}</td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                                <button type="button" class="btn btn-sm btn-danger">Delete</button>
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
                                    @if($inactive->count())
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
                                                    @foreach($inactive as $product)
                                                        <tr>
                                                            <td>{{ $product->product_name }}</td>
                                                            <td>
                                                                @if($product->product_img)
                                                                    <img src="{{ asset('storage/' . ltrim($product->product_img, '/')) }}" width="80" class="img-thumbnail" alt="{{ $product->product_name }}">
                                                                @else
                                                                    <span class="text-muted">No image</span>
                                                                @endif
                                                            </td>
                                                            <td>₹{{ number_format($product->product_price, 2) }}</td>
                                                            <td>{{ $product->product_total }}</td>
                                                            <td>
                                                                <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                                                <button type="button" class="btn btn-sm btn-danger">Delete</button>
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
    @endsection
</x-admin-dashboard>
