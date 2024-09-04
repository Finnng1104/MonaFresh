<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mona Fresh</title>
    <link rel="stylesheet" href="{{ asset('css/layout/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/directory/directory.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-interface/mobile-navigation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>
    @extends('layout.layout')

    @section('content')
        <h1 data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">DANH BẠN NHÀ NÔNG</h1>
        <div class="container" id="directory">
            <div class="sidebar-directory" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
                <div class="search-directory">
                    <input type="text" placeholder="Tìm kiếm...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <section class="category-section">
                    <h2 class="category-title">BÀI VIẾT MỚI</h2>
                    <ul class="recent-posts">
                        <li class="color">
                            <img src="{{ asset('img/product/sup-lo-xanh-nau-mon-gi-2-600x400.jpg') }}"
                                alt="Nấm vân chi có tác dụng gì?">
                            <a href="#">Nấm vân chi có tác dụng gì?</a>
                        </li>
                        <li>
                            <img src="{{ asset('img/product/sup-lo-xanh-nau-mon-gi-2-600x400.jpg') }}"
                                alt="Nấm vân chi có tác dụng gì?">
                            <a href="#">Chả cốm ăn với gì ngon?</a>
                        </li>
                        <li class="color">
                            <img src="{{ asset('img/product/sup-lo-xanh-nau-mon-gi-2-600x400.jpg') }}"
                                alt="Nấm vân chi có tác dụng gì?">
                            <a href="#">Cốm tươi làm món gì ngon?</a>
                        </li>
                        <li>
                            <img src="{{ asset('img/product/sup-lo-xanh-nau-mon-gi-2-600x400.jpg') }}"
                                alt="Nấm vân chi có tác dụng gì?">
                            <a href="#">Cách làm măng tây xào tỏi</a>
                        </li>
                        <li class="color">
                            <img src="{{ asset('img/product/sup-lo-xanh-nau-mon-gi-2-600x400.jpg') }}"
                                alt="Nấm vân chi có tác dụng gì?">
                            <a href="#">Súp lơ xanh nấu món gì ngon?</a>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="main-content" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
                <div class="directory-grid">
                    <div class="company-card">
                        <img src="{{ asset('img/congty/logo-1-300x144.png') }}" alt="Công ty Thực Phẩm Tâm Minh">
                        <div class="date">
                            <span>15</span>
                            <span>Th5</span>
                        </div>
                        <h3>Công ty Thực Phẩm Tâm Minh</h3>
                        <p>Công ty TNHH Thực phẩm Tâm Minh có sản xuất Bột nêm Ngưu...</p>
                    </div>
                    <div class="company-card">
                        <img src="{{ asset('img/congty/logo-1-300x144.png') }}" alt="Công ty Thực Phẩm Tâm Minh">
                        <div class="date">
                            <span>15</span>
                            <span>Th5</span>
                        </div>
                        <h3>Công Ty Thiên Nhiên Việt</h3>
                        <p>Công ty TNHH Xuất Nhập Khẩu Thiên Nhiên Việt chuyên về sản xu...</p>
                    </div>
                    <div class="company-card"> <img src="{{ asset('img/congty/logo-1-300x144.png') }}"
                            alt="Công ty Thực Phẩm Tâm Minh">
                        <div class="date">
                            <span>15</span>
                            <span>Th5</span>
                        </div>
                        <h3>Binca Việt Nam</h3>
                        <p>Chính thức bước vào thị trường Việt Nam vào năm 1998, sau hơn 7 n...</p>
                    </div>
                    <div class="company-card"> <img src="{{ asset('img/congty/logo-1-300x144.png') }}"
                            alt="Công ty Thực Phẩm Tâm Minh">
                        <div class="date">
                            <span>15</span>
                            <span>Th5</span>
                        </div>
                        <h3>Antofu Việt Nam</h3>
                        <p>Antofu Việt Nam là công ty được đầu tư với 100% nguồn vốn và công...</p>
                    </div>
                    <div class="company-card">
                        <img src="{{ asset('img/congty/logo-1-300x144.png') }}" alt="Công ty Thực Phẩm Tâm Minh">
                        <div class="date">
                            <span>15</span>
                            <span>Th5</span>
                        </div>
                        <h3>An Mộc Farm</h3>
                        <p>An Mộc Farm – Trang trại thuần nông chuyên cung cấp 100% thự...</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
