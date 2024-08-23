<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MonaFresh</title>
    <link rel="stylesheet" href="{{ asset('css/layout/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-interface/mobile-navigation.css') }}">
</head>

<body>
    @extends('layout.layout')
    @section('content')
        <section class="hero">
            <div class="hero-content">
                <h1>Tìm mua <span>thực phẩm sạch</span> từ <br> <span>nhà cung cấp uy tín</span> tại đây</h1>
                <a href="#" style="color:aliceblue; font-size:50px; font-weight:bold; margin-top:20px">Mua ngay</a>
            </div>
        </section>
        <!-- Product Categories -->
        <section class="product-categories">
            <div class="container">
                <h2>Mua sản phẩm được lựa chọn từ vườn</h2>
                <div class="categories">
                    <div class="category-item">
                        <img src="{{ asset('img/categories/cate1.png') }}" alt="Rau củ">
                        <p><a>Rau củ</a></p>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('img/categories/cate2.png') }}" alt="Hải sản">
                        <p><a>Hải sản</a></p>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('img/categories/cate3.png') }}" alt="Thịt trứng">
                        <p><a>Thịt trứng</a></p>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('img/categories/cate4.png') }}" alt="Trái cây">
                        <p><a>Trái cây</a></p>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('img/categories/cate5.png') }}" alt="Đồ khô">
                        <p><a>Đồ khô</a></p>
                    </div>
                    <div class="category-item">
                        <img src="{{ asset('img/categories/cate6.png') }}" alt="Đồ uống">
                        <p><a>Đồ uống</a></p>
                    </div>

                </div>
        </section>
        <section class="promotion-categories">
            <div class="container">
                <h2>Chương trình khuyến mãi</h2>
                <div class="categories">
                    <div class="category">
                        <img src="{{ asset('img/categories/promotion_1.png') }}" alt="">
                    </div>
                    <div class="category">
                        <img src="{{ asset('img/categories/promotion_2.jpg') }}" alt="">
                    </div>
                    <div class="category">
                        <img src="{{ asset('img/categories/promotion_3.jpg') }}" alt="">
                    </div>
                    <div class="category">
                        <img src="{{ asset('img/categories/promotion_1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-products">
            <div class="container">
                <h2>Sản phẩm nổi bật</h2>
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
                <div class="product-list mobile-interface">
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
                            <p>1.000.000₫</p>
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
                <button class="see-more">Xem thêm</button>
            </div>
        </section>
        <section class="featured-products mobile-none">
            <div class="container">
                <h2>Hoa quả tươi ngon</h2>
                <div id="productCategory" class="product-list">
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
                    {{-- @foreach ($data2 as $product)
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
                <button class="see-more">Xem thêm</button>
            </div>
        </section>
        <section class="blogs">
            <div class="container">
                <h2>Hành trình Organic bắt đầu từ đây</h2>
                <div class="blog-list">
                    <article class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blogs/news_1.png') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>Làm thế nào để được chứng nhận hữu cơ ở Việt Nam?</h3>
                            <p>Chứng nhận hữu cơ là một tiêu chuẩn góp phần đảm bảo tính giá trị cho các sản phẩm hữu cơ.
                            </p>
                        </div>
                    </article>
                    <article class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blogs/news_2.jpg') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>Giải đáp : Thực phẩm hữu cơ Organic là gì ?</h3>
                            <p>Thực phẩm organic hay còn gọi là thực phẩm hữu cơ đang ngày một phổ biến và tạo một cơn sốt
                                trên
                                thị trường hiện nay.</p>
                        </div>
                    </article>
                    <article class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blogs/news_3.jpg') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>Nông nghiệp hữu cơ và thực trạng chứng nhận tại Việt Nam</h3>
                            <p>Là một mô hình nông nghiệp còn khá mới tại VN nhưng đã được áp dụng từ lâu ở những nước phát
                                triển.</p>
                        </div>
                    </article>
                    <article class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/img/blogs/news_4.jpg') }}" alt="">
                        </div>
                        <div class="blog-content">
                            <h3>Tổng hợp những điều bạn cần biết về thực phẩm organic</h3>
                            <p>Thực phẩm hữu cơ – thực phẩm organic xuất hiện trong thời gian gần đây như là cứu cánh của
                                nhiều
                                bà nội trợ Việt Nam.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- <section class="customer-testimonials">
                                                                                                                <div class="container">
                                                                                                                    <h2>Khách hàng nói gì về MonaFresh</h2>
                                                                                                                    <div class="testimonials d-flex">
                                                                                                                        <blockquote>
                                                                                                                            <img src="public/img/customer-comment/customer1.jpg" alt="">
                                                                                                                            <p>“Trang này dịch vụ tốt, rau củ quả tươi ngon an toàn, giá hợp lý. Mình rất hài lòng và sẽ giới thiệu cho bạn bè mình.”</p>
                                                                                                                            <p> <b>Chị Phúc </b>/ Mona Media</p>
                                                                                                                        </blockquote>
                                                                                                                        <blockquote>
                                                                                                                            <img src="public/img/customer-comment/index_customer_2.jpg" alt="">
                                                                                                                            <p>“MonaFresh là nơi giúp bạn có thể yên tâm khi lựa chọn thực phẩm và hiểu hơn về nông nghiệp hữu cơ”</p>
                                                                                                                            <p> <b>  Chị Lộc </b>/ Mona Media</p>
                                                                                                                        </blockquote>
                                                                                                                        <blockquote>
                                                                                                                            <img src="public/img/customer-comment/index_customer_3.jpg" alt="">
                                                                                                                            <p>Trang này dịch vụ tốt, rau củ quả tươi ngon an toàn, giá hợp lý. Mình rất hài lòng cà sẽ giới thiệu cho bạn bè mình.”</p>
                                                                                                                            <p> <b>Chị Thọ </b>/ Mona Media</p>
                                                                                                                        </blockquote>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </section> -->
        <section class="commitment">
            <div class="container">
                <h2>Cam kết của chúng tôi</h2>
                <div class="commitment-list">
                    <div class="commitment-item">
                        <img src="{{ asset('img/commit/index_commit_1.jpg') }}" alt="">
                    </div>
                    <div class="commitment-item">
                        <img src="{{ asset('img/commit/index_commit_2-1.jpg') }}" alt="">
                    </div>
                    <div class="commitment-item">
                        <img src="{{ asset('img/commit/index_commit_3-1.jpg') }}" alt="">
                    </div>
                    <div class="commitment-item">
                        <img src="{{ asset('img/commit/index_commit_4.jpg') }}" alt="">
                    </div>
                    <div class="commitment-item">
                        <img src="{{ asset('img/commit/index_commit_1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
    @endsection

</body>

</html>
