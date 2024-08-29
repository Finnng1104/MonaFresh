<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mona Fresh</title>
    <link rel="stylesheet" href="{{ asset('css/layout/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/directory/directory.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    @extends('layout.layout')

    @section('content')
        <h1>KIẾN THỨC</h1>
        <div class="container" id="directory">
            <div class="sidebar">
                <div class="search-bar">
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

            <div class="main-content">

                <div class="articles-grid">
                    <div class="article">
                        <img src="path_to_article_image1.jpg" alt="Nấm vân chi có tác dụng gì?">
                        <div class="date">
                            <span>16</span>
                            <span>Th5</span>
                        </div>
                        <h3><a href="#">Nấm vân chi có tác dụng gì?</a></h3>
                        <p>Cách đây hơn 2000 năm, nấm vân chi rừng đã được biết đến và sử dụng...</p>
                    </div>
                    <div class="article">
                        <img src="path_to_article_image2.jpg" alt="Chả cốm ăn với gì ngon">
                        <div class="date">
                            <span>16</span>
                            <span>Th5</span>
                        </div>
                        <h3><a href="#">Chả cốm ăn với gì ngon?</a></h3>
                        <p>Bánh giò Bánh giò là một loại bánh được làm từ bột gạo tẻ...</p>
                    </div>
                    <div class="article">
                        <img src="path_to_article_image3.jpg" alt="Cốm tươi làm món gì ngon?">
                        <div class="date">
                            <span>16</span>
                            <span>Th5</span>
                        </div>
                        <h3><a href="#">Cốm tươi làm món gì ngon?</a></h3>
                        <p>Cốm tươi làm món gì ngon Dùng cốm tươi làm món gì, cốm tươi có...</p>
                    </div>
                    <div class="article">
                        <img src="path_to_article_image4.jpg" alt="Cách làm măng tây xào tỏi">
                        <div class="date">
                            <span>16</span>
                            <span>Th5</span>
                        </div>
                        <h3><a href="#">Cách làm măng tây xào tỏi</a></h3>
                        <p>Nguyên liệu cần để nấu món măng tây xào tỏi 500g măng tây xanh 2...</p>
                    </div>
                    <div class="article">
                        <img src="path_to_article_image5.jpg" alt="Súp lơ xanh nấu món gì ngon?">
                        <div class="date">
                            <span>16</span>
                            <span>Th5</span>
                        </div>
                        <h3><a href="#">Súp lơ xanh nấu món gì ngon?</a></h3>
                        <p>Súp lơ xanh xào gà Nguyên liệu cần để nấu 600g ức gà; 250g súp lơ xanh...</p>
                    </div>
                    <div class="article">
                        <img src="path_to_article_image6.jpg" alt="Yến mạch là gì?">
                        <div class="date">
                            <span>16</span>
                            <span>Th5</span>
                        </div>
                        <h3><a href="#">Yến mạch là gì?</a></h3>
                        <p>Yến mạch là gì? Yến mạch là một loại ngũ cốc, thường được trồng ở...</p>
                    </div>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
