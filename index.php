<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonaFresh</title>
    <link rel="stylesheet" href="upload/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://accounts.google.com/gsi/client" async defer></script>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="header-top">
                <div class="header-contact">
                    <a href="mailto:mon@mon.media"><i class="fa-solid fa-envelope"></i>mon@mon.media</a>
                    <span class="separator"></span>
                    <a href="tel:0376491104"><i class="fa-solid fa-phone"></i>0376491104</a>
                </div>
                <div class="header-auth">
                    <a id="loginBtn" href="#">Đăng nhập / Đăng ký</a>
                    <div id="user-info" style="display:none;">
                        <img id="user-avatar" src="" alt="User Avatar" >
                        <span id="user-name"></span>
                    </div>
                    <span class="separator"></span>
                    <a href="#">Giỏ hàng (0)đ<i class="fa-solid fa-cart-shopping"></i></a>
                </div>
            </div>
        </div>

         <!-- Login Modal -->
        <div id="loginModal" class="modal">
            <div class="modal-content">
                <span class="close-btn">&times;</span>
                
                <!-- Login Form -->
                <div id="loginForm" class="form-content">
                    <h2>ĐĂNG NHẬP</h2>
                    <form action="#" method="post">
                        <label for="username">Tên tài khoản hoặc địa chỉ email *</label>
                        <input type="text" id="username" name="username" required>
                        
                        <label for="password">Mật khẩu *</label>
                        <input type="password" id="password" name="password" required>
                        
                        <button type="submit">ĐĂNG NHẬP</button>
                        <div id="g_id_onload"
                                data-client_id="670250432008-9hvkngumlsbpqve7n0u1gf6m7j1p3dnr.apps.googleusercontent.com"
                                data-callback="handleCredentialResponse"
                                data-auto_prompt="false">
                        </div>
                        <div class="g_id_signin"
                                data-type="standard"
                                data-shape="rectangular"
                                data-theme="outline"
                                data-text="sign_in_with"
                                data-size="large">
                        </div>
                        <label>
                            <input type="checkbox" name="remember"> Ghi nhớ mật khẩu
                        </label>
                        <a href="#">Quên mật khẩu?</a>
                        <p>Chưa có tài khoản? <a href="#" id="showRegister">Đăng ký</a></p>
                    </form>
                </div>
                
                <!-- Register Form -->
                <div id="registerForm" class="form-content" style="display:none;">
                    <h2>ĐĂNG KÝ</h2>
                    <form action="#" method="post">
                        <label for="new-username">Tên tài khoản *</label>
                        <input type="text" id="new-username" name="new-username" required>
                        
                        <label for="new-password">Mật khẩu *</label>
                        <input type="password" id="new-password" name="new-password" required>
                        
                        <button type="submit">ĐĂNG KÝ</button>
                        <p>Đã có tài khoản? <a href="#" id="showLogin">Đăng nhập</a></p>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <header id="header-menu-sticky">
        <div class="container">
        <div class="header-main">
                <div class="logo">
                    <a href="index.php"><img src="upload/img/logo.png" alt="MonaFresh"></a>
                </div>
                <nav class="navigation">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Cửa hàng</a></li>
                        <li><a href="#">Danh bạ nhà nông</a></li>
                        <li><a href="#">Kiến thức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div>
    </header>
   
    
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Tìm mua <span>thực phẩm sạch</span> từ <br> <span>nhà cung cấp uy tín</span> tại đây</h1>
            <button class="btn-buy-now"><a href="#">Mua ngay</a></button>
        </div>
    </section>

    <!-- Product Categories -->
    <section class="product-categories">
        <div class="container">
            <h2>Mua sản phẩm được lựa chọn từ vườn</h2>
            <div class="categories">
                <div class="category">
                    <img src="upload/img/categories/cate1.png" alt="Rau củ">
                    <p><a>Rau củ</a></p>
                </div>
                <div class="category">
                    <img src="upload/img/categories/cate2.png" alt="Hải sản">
                    <p><a>Hải sản</a></p>
                </div>
                <div class="category">
                    <img src="upload/img/categories/cate3.png" alt="Hải sản">
                    <p><a>Thịt trứng</a></p>
                </div>
                <div class="category">
                    <img src="upload/img/categories/cate4.png" alt="Hải sản">
                    <p><a>Trái cây</a></p>
                </div>
                <div class="category">
                    <img src="upload/img/categories/cate5.png" alt="Hải sản">
                    <p><a>Đồ khô</a></p>
                </div>
                <div class="category">
                    <img src="upload/img/categories/cate6.png" alt="Hải sản">
                    <p><a>Đồ uống</a></p>
                </div>
                
        </div>
    </section>
    <section class="promotion-categories">
        <div class="container">
            <h2>Chương trình khuyến mãi</h2>
            <div class="categories">
                <div class="category">
                    <img src="upload/img/categories/promotion_1.png" alt="">
                </div>
                <div class="category">
                    <img src="upload/img/categories/promotion_2.jpg" alt="">
                </div>
                <div class="category">
                    <img src="upload/img/categories/promotion_3.jpg" alt="">
                </div>
                <div class="category">
                    <img src="upload/img/categories/promotion_2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="featured-products">
        <div class="container">
            <h2>Sản phẩm nổi bật</h2>
            <div id="topSellProduct" class="product-list">
                
            </div>
            <button class="see-more">Xem thêm</button>
        </div>
    </section>
    <section class="featured-products">
        <div class="container">
            <h2>Hoa quả tươi ngon</h2>
            <div id="productCategory" class="product-list">
                
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
                        <img src="upload/img/blogs/news_1.png" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>Làm thế nào để được chứng nhận hữu cơ ở Việt Nam?</h3>
                        <p>Chứng nhận hữu cơ là một tiêu chuẩn góp phần đảm bảo tính giá trị cho các sản phẩm hữu cơ.</p>
                    </div>
                </article>
                <article class="blog-item">
                    <div class="blog-img">
                        <img src="upload/img/blogs/news_2.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>Giải đáp : Thực phẩm hữu cơ Organic là gì ?</h3>
                        <p>Thực phẩm organic hay còn gọi là thực phẩm hữu cơ đang ngày một phổ biến và tạo một cơn sốt trên thị trường hiện nay.</p>
                    </div>
                </article>
                <article class="blog-item">
                    <div class="blog-img">
                        <img src="upload/img/blogs/news_3.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>Nông nghiệp hữu cơ và thực trạng chứng nhận tại Việt Nam</h3>
                        <p>Là một mô hình nông nghiệp còn khá mới tại VN nhưng đã được áp dụng từ lâu ở những nước phát triển.</p>
                    </div>
                </article>
                <article class="blog-item">
                    <div class="blog-img">
                        <img src="upload/img/blogs/news_4.jpg" alt="">
                    </div>
                    <div class="blog-content">
                        <h3>Tổng hợp những điều bạn cần biết về thực phẩm organic</h3>
                        <p>Thực phẩm hữu cơ – thực phẩm organic xuất hiện trong thời gian gần đây như là cứu cánh của nhiều bà nội trợ Việt Nam.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="customer-testimonials">
        <div class="container">
            <h2>Khách hàng nói gì về MonaFresh</h2>
            <div class="testimonials"></div>
            <blockquote>
                <p>“Trang này dịch vụ tốt, rau củ quả tươi ngon an toàn, giá hợp lý. Mình rất hài lòng và sẽ giới thiệu cho bạn bè mình.”</p>
                <!-- <footer>— Chị Phúc / Mona Media</footer> -->
            </blockquote>
            <blockquote>
                <p>“MonaFresh là nơi giúp bạn có thể yên tâm khi lựa chọn thực phẩm và hiểu hơn về nông nghiệp hữu cơ.”</p>
                <!-- <footer>— Chị Lộc / Mona Media</footer> -->
            </blockquote>
        </div>
    </section>
    <footer>
        <div class="container">
            <section class="footer-item item1">
                <div class="logo">
                    <img src="upload/img/logo.png" alt="">
                </div>
                <address>
                    <nav>
                        <ul>
                            <li><i class="fa-solid fa-location-dot"></i> 319 C16 Lý Thường Kiệt, P15, Q11, Tp.HCM</li>
                            <li><i class="fa-solid fa-phone"></i><a href="#"> Điện thoại: 076 922 0162</a></li>
                            <li><i class="fa-solid fa-envelope"></i><a href="#"> demonhunterg@gmail.com</a></li>
                            <li><i class="fa-brands fa-skype"></i><a href="#">demonhunterp</a></li>
                        </ul>
                    </nav>
                </address>
            </section>
            <section class="footer-item item2">
                <h2>Sản phẩm</h2>
                <nav>
                    <ul>
                        <li><a href="#">Rau củ</a></li>
                        <li><a href="#">Hải sản</a></li>
                        <li><a href="#">Trái cây</a></li>
                        <li><a href="#">Đồ uống</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </section>
            <section class="footer-item item2">
                <h2>Danh mục</h2>
                <nav>
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Cửa hàng</a></li>
                        <li><a href="#">Kiến thức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </section>
            <section class="footer-item item2">
                <h2>Dịch vụ</h2>
                <nav>
                    <ul>
                        <li><a href="#">Rau củ</a></li>
                        <li><a href="#">Hải sản</a></li>
                        <li><a href="#">Trái cây</a></li>
                        <li><a href="#">Đồ uống</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </nav>
            </section>
            <section class="footer-item item1">
                <h2>Đăng ký</h2>
                <p>Đăng ký để nhận được được thông tin mới nhất từ chúng tôi.</p>
                <input type="email" placeholder="Email...">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
            </section>
        </div>
    </footer>
    <script src="./view/js/main.js" type="module"></script>
</body>
</html>
