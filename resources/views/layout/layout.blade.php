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
                    <img id="user-avatar" src="" alt="User Avatar">
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
                        data-callback="handleCredentialResponse" data-auto_prompt="false">
                    </div>
                    <div class="g_id_signin" data-type="standard" data-shape="rectangular" data-theme="outline"
                        data-text="sign_in_with" data-size="large">
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
            @include('layout.nav')
        </div>
    </div>
</header>
@yield('content')


<footer>
    <div class="container">
        <section class="footer-item item1">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="">
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
        <section class="footer-item item2 d-none">
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
        <section class="footer-item item3">
            <h2>Đăng ký</h2>
            <p>Đăng ký để nhận được được thông tin mới nhất từ chúng tôi.</p>
            <input type="email" placeholder="Email...">
            <div>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>

        </section>
    </div>
</footer>
<script>
    function setActiveMenu() {
        // Lấy tham số 'page' từ URL
        const urlParams = new URLSearchParams(window.location.search);
        const page = urlParams.get('page') || 'home';

        // Xóa lớp active khỏi tất cả các mục
        document.querySelectorAll('.navigation li').forEach(li => {
            li.classList.remove('active');
        });

        // Thêm lớp active vào mục tương ứng
        const activeLink = document.getElementById(page);
        if (activeLink) {
            activeLink.parentElement.classList.add('active');
        }
    }

    // Gọi hàm khi trang được tải
    document.addEventListener('DOMContentLoaded', setActiveMenu);
</script>
<script src="{{ asset('js/login.js') }}"></script>
