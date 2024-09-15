@extends('layouts.layout')
@section('content')
    <main id="homepage">
        <section class="hero">
            <div class="banner-title">
                <div class="snow"></div>
                <h1>Tìm mua <span>thực phẩm sạch</span> từ <br> <span>nhà cung cấp uy tín</span> tại đây</h1>
                <button> <a href="{{ route('product') }}">Mua ngay</a></button>
            </div>
            <div class="hero-content">
            </div>
        </section>
        <!-- Product Categories -->
        <section class="product-categories">
            <div class="container" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
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
        <section class="promotion-categories" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
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
        <section class="featured-products" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
            <div class="container">
                <h2>Sản phẩm nổi bật</h2>
                <div class="product-list pc-interface">
                    @if (!empty($bestSellingProducts))
                        @foreach ($bestSellingProducts as $product)
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
                        @endforeach
                    @else
                        <p>Không có sản phẩm nào.</p>
                    @endif
                </div>
                <div class="product-list mobile-interface">
                    {{-- @foreach ($bestSellingProducts as $product)
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
        <section class="featured-products mobile-none" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
            <div class="container">
                <h2>Hoa quả tươi ngon</h2>
                <div id="productCategory" class="product-list">
                    {{-- @foreach ($fruitProducts as $product)
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
        <section class="blogs" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
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
        <section class="customer-testimonials">
            <div class="testimonials-background"></div>
            <div class="testimonials-content">
                <h2>Khách hàng nói gì về MonaFresh</h2>
                <div class="testimonials-grid">
                    <div class="testimonial">
                        <img src="{{ asset('/img/blogs/news_4.jpg') }}" alt="Chị Phúc">
                        <p>“Trang này dịch vụ tốt, rau củ quả tươi ngon an toàn, giá hợp lý. Mình rất hài lòng và sẽ giới
                            thiệu cho bạn bè mình.”</p>
                        <h4>Chị Phúc / Mona Media</h4>
                    </div>
                    <div class="testimonial">
                        <img src="{{ asset('/img/blogs/news_4.jpg') }}" alt="Chị Lộc">
                        <p>“MonaFresh là nơi giúp bạn có thể yên tâm khi lựa chọn thực phẩm và hiểu hơn về nông nghiệp hữu
                            cơ.”</p>
                        <h4>Chị Lộc / Mona Media</h4>
                    </div>
                    <div class="testimonial">
                        <img src="{{ asset('/img/blogs/news_4.jpg') }}" alt="Chị Thọ">
                        <p>“Trang này dịch vụ tốt, rau củ quả tươi ngon an toàn, giá hợp lý. Mình rất hài lòng và sẽ giới
                            thiệu cho bạn bè mình.”</p>
                        <h4>Chị Thọ / Mona Media</h4>
                    </div>
                </div>
            </div>
        </section>
        </section>
        <section class="commitment" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500">
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
    </main>
@endsection
