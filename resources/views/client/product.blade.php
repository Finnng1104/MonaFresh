<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonaFresh</title>
    <link rel="stylesheet" href="{{ asset('css/layout/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-interface/mobile-navigation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="banner-item">
            <h2><b>SẢN PHẨM</b></h2>
            TRANG CHỦ / <b>SẢN PHẨM</b>
        </div>
        <div class="container">
            <section class="store-header d-flex">
                <div class="store-header-left">
                    TRANG CHỦ / <b>SẢN PHẨM</b>
                </div>
                <div class="store-header-right">
                    <span>Hiển thị một kết quả duy nhất</span>
                    <select name="sort" id="sort">
                        <option value="0">Thứ tự mặc định</option>
                        <option value="1">Thứ tự theo mức độ phổ biến</option>
                        <option value="2">Thứ tự theo điểm đánh giá</option>
                        <option value="3">Mới nhất</option>
                        <option value="4">Thứ tự theo giá: Từ thấp đến cao</option>
                        <option value="4">Thứ tự theo giá: Từ cao đến thấp</option>
                    </select>
                </div>
            </section>
            <div class="store-infor">
                <section class="category-section">
                    <h2 class="category-title">DANH MỤC <span>SẢN PHẨM</span></h2>
                    <ul class="category-list">
                        <li class="category-item color" onclick="setActive(this)">Rau củ</li>
                        <li class="category-item" onclick="setActive(this)">Hải sản</li>
                        <li class="category-item color" onclick="setActive(this)">Trái cây</li>
                        <li class="category-item" onclick="setActive(this)">Đồ khô</li>
                        <li class="category-item color" onclick="setActive(this)">Thịt trứng</li>
                    </ul>
                </section>
                <div class="product-list pc-interface">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>1.000.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>500.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>1.000.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>500.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>1.000.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>500.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>1.000.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>500.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>1.000.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>500.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>1.000.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>

                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/bosap.jpeg') }}">
                        </div>
                        <div class="product-content">
                            <h3>Tên sản phẩm</h3>
                            <p>500.000₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                    {{-- @foreach ($data as $product)
                    <div class="product">
                        <div class="product-img">
                            <img src="{{ asset('/img/product/' . $product->image) }}" alt="{{ $product->name }}">
                        </div>
                        <div class="product-content">
                            <h3>{{ $product->name }}</h3>
                            <p>{{ number_format($product->price, 0, ',', '.') }}₫</p>
                            <button>Thêm vào giỏ</button>
                        </div>
                    </div>
                @endforeach --}}
                </div>
            </div>

        </div>
    @endsection
    <script>
        function setActive(element) {
            // Loại bỏ lớp 'active' khỏi tất cả các mục
            var items = document.querySelectorAll('.category-item');
            items.forEach(function(item) {
                item.classList.remove('active');
            });

            // Thêm lớp 'active' vào mục được click
            element.classList.add('active');
        }
    </script>
</body>

</html>
