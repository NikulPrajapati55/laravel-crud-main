<x-app-layout>
    @section('meta')
        <title>Store</title>
    @endsection

    @section('content')
        <section class="section">
            <div class="wrap">
                <div class="row g-4">
                    @php
                        $allproduct = \App\Models\StoreData::all()->groupBy('product_category');
                    @endphp

                    @foreach ($allproduct as $category => $products)
                        <div class="col-12">
                            <h5 class="category-title mb-4">{{ ucfirst($category) }}</h5>
                        </div>
                        @foreach ($products as $product)
                            @if ($product->product_status == 1)
                                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                                    <div class="custom-product-card">
                                        <div class="custom-product-img-wrap">
                                            <img src="{{ asset('storage/' . $product->product_img) }}"
                                                class="custom-product-img" alt="{{ $product->product_name }}">
                                            <div class="custom-badge">
                                                @if ($product->product_total > 10)
                                                    <span class="badge bg-success">In Stock</span>
                                                @elseif($product->product_total > 0)
                                                    <span class="badge bg-warning text-dark">Few Left</span>
                                                @else
                                                    <span class="badge bg-danger">Out of Stock</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="custom-product-body">
                                            <h5 class="custom-product-title">{{ $product->product_name }}</h5>
                                            <p class="custom-product-price">₹{{ number_format($product->product_price, 2) }}
                                            </p>
                                            <p class="custom-product-stock">Stock:
                                                <span>{{ $product->product_total }}</span>
                                            </p>
                                            <a href="#" class="custom-product-btn">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>

        <style>
            .category-title {
                font-size: 1.4rem;
                font-weight: 800;
                color: #1e7e34;
                letter-spacing: 1px;
                border-left: 6px solid #43e97b;
                padding-left: 16px;
                background: linear-gradient(90deg, #e6ffe6 0%, #f8fff8 100%);
                border-radius: 8px;
            }

            .custom-product-card {
                background: linear-gradient(135deg, #f8fff8 0%, #e6ffe6 100%);
                border-radius: 22px;
                box-shadow: 0 8px 32px rgba(40, 167, 69, 0.13);
                overflow: hidden;
                display: flex;
                flex-direction: column;
                transition: transform 0.2s, box-shadow 0.2s;
                position: relative;
                min-height: 420px;
            }

            .custom-product-card:hover {
                transform: translateY(-8px) scale(1.03);
                box-shadow: 0 16px 48px rgba(40, 167, 69, 0.18);
            }

            .custom-product-img-wrap {
                position: relative;
                width: 100%;
                height: 220px;
                overflow: hidden;
                background: #fff;
            }

            .custom-product-img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: filter 0.2s;
            }

            .custom-product-card:hover .custom-product-img {
                filter: brightness(0.93) saturate(1.1);
            }

            .custom-badge {
                position: absolute;
                top: 18px;
                left: 18px;
                z-index: 2;
            }

            .badge {
                font-size: 1rem;
                padding: 7px 18px;
                border-radius: 14px;
                box-shadow: 0 2px 8px rgba(40, 167, 69, 0.10);
            }

            .custom-product-body {
                padding: 28px 22px 22px 22px;
                flex: 1 1 auto;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
            }

            .custom-product-title {
                font-size: 1.45rem;
                font-weight: 700;
                margin-bottom: 10px;
                color: #218838;
                letter-spacing: 0.5px;
            }

            .custom-product-price {
                font-size: 1.2rem;
                font-weight: 700;
                color: #43e97b;
                margin-bottom: 8px;
            }

            .custom-product-stock {
                font-size: 1rem;
                color: #555;
                margin-bottom: 18px;
            }

            .custom-product-btn {
                display: inline-block;
                padding: 12px 0;
                background: linear-gradient(90deg, #28a745 60%, #43e97b 100%);
                color: #fff;
                border: none;
                border-radius: 10px;
                text-decoration: none;
                font-weight: 700;
                font-size: 1.1rem;
                box-shadow: 0 2px 8px rgba(40, 167, 69, 0.10);
                transition: background 0.2s, box-shadow 0.2s;
                margin-top: auto;
                text-align: center;
            }

            .custom-product-btn:hover {
                background: linear-gradient(90deg, #218838 60%, #38d39f 100%);
                box-shadow: 0 4px 16px rgba(40, 167, 69, 0.15);
            }

            @media (max-width: 991px) {
                .custom-product-card {
                    min-height: 380px;
                }

                .custom-product-img-wrap {
                    height: 180px;
                }
            }

            @media (max-width: 767px) {
                .custom-product-card {
                    min-height: 340px;
                }

                .custom-product-img-wrap {
                    height: 140px;
                }
            }
        </style>
    @endsection
</x-app-layout>
