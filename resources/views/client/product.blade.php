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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <div class="container">
            <section class="store-header d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
                <div class="store-header-left">
                    TRANG CHỦ / <b>SẢN PHẨM</b>
                </div>
                <span class="toggle-sidebar">&#9776; LỌC</span>
                <div class="store-header-right">
                    <span class="title-filter">Hiển thị một kết quả duy nhất</span>
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
            <div class="store-infor" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
                <div class="overlay"></div>
                <section class="category-section">

                    <h2 class="category-title">DANH MỤC <span>SẢN PHẨM</span></h2>
                    <ul class="category-list">
                        <li class="category-item color" onclick="setActive(this)">Rau củ</li>
                        <li class="category-item" onclick="setActive(this)">Hải sản</li>
                        <li class="category-item color" onclick="setActive(this)">Trái cây</li>
                        <li class="category-item" onclick="setActive(this)">Đồ khô</li>
                        <li class="category-item color" onclick="setActive(this)">Thịt trứng</li>
                    </ul>
                    <div class="filter-section">
                        <h2 class="filter-title">LỌC THEO GIÁ</h2>
                        <div class="filter-content">
                            <input type="range" id="price-range" min="29000" max="235000" value="29000"
                                step="1000" oninput="updatePriceRange(this.value)">
                            <div class="filter-actions">
                                <button onclick="filterProducts()">Lọc</button>
                                <p id="price-value">Giá: <span id="min-price">29,000đ</span> - <span
                                        id="max-price">235,000đ</span></p>
                            </div>
                        </div>
                    </div>
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
        document.addEventListener('DOMContentLoaded', () => {
            const sidebar = document.querySelector('.category-section');
            const overlay = document.querySelector('.overlay');
            const toggleSidebar = document.querySelector('.toggle-sidebar');

            // Mở sidebar và hiển thị overlay
            toggleSidebar.addEventListener('click', () => {
                sidebar.classList.add('active');
                overlay.style.opacity = '1';
                overlay.style.visibility = 'visible';
            });

            // Đóng sidebar và ẩn overlay
            overlay.addEventListener('click', () => {
                sidebar.classList.remove('active');
                overlay.style.opacity = '0';
                overlay.style.visibility = 'hidden';
            });
        });

        function updatePriceRange(value) {
            document.getElementById('min-price').textContent = new Intl.NumberFormat('vi-VN').format(value) + ' đ';
        }

        function filterProducts() {
            alert('Lọc sản phẩm theo giá');
        }

        function setActive(element) {
            var items = document.querySelectorAll('.category-item');
            items.forEach(function(item) {
                item.classList.remove('active');
            });
            element.classList.add('active');
        }

        function updatePriceRange(value) {
            document.getElementById('min-price').textContent = new Intl.NumberFormat('vi-VN').format(value) + ' đ';
        }

        function filterProducts() {
            alert('Lọc sản phẩm theo giá');
        }

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
