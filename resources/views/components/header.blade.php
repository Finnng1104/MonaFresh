<header>
    <div class="header">
        <div class="container">
            <div class="header-top">
                <div class="header-contact">
                    <a href="mailto:mon@mon.media"><i class="fa-solid fa-envelope"></i>mon@mon.media</a>
                    <span class="separator"></span>
                    <a href="tel:0376491104"><i class="fa-solid fa-phone"></i>0376491104</a>
                </div>
                <div class="header-auth">
                    <a id="loginBtn" href="{{ route('login') }}">Đăng nhập / Đăng ký</a>
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
    </div>
    <div id="header-menu-sticky">
        <div class="container">
            <div class="header-main">
                @include('layouts.nav')
            </div>
        </div>
    </div>
</header>
