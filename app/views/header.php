<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MonaFresh</title>
    <link rel="stylesheet" href="upload/css/mobile-display.css">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
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
                <div class="mobile-navigation">
                <div class="menu-overlay"></div>
                    <div class="sidebar">
                        <!-- <button class="close-btn">&times;</button> -->
                        <ul class="menu">
                            <li><a href="#">Trang chủ</a></li>
                            <li><a href="#">Giới thiệu</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Cửa hàng</a>
                                <ul class="submenu">
                                    <li><a href="#">Rau củ</a></li>
                                    <li><a href="#">Hải sản</a></li>
                                    <li><a href="#">Trái cây</a></li>
                                    <li><a href="#">Đồ uống</a></li>
                                    <li><a href="#">Đồ khô</a></li>
                                    <li><a href="#">Thịt trứng</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Danh bạ nhà nông</a></li>
                            <li><a href="#">Kiến thức</a></li>
                            <li><a href="#">Liên hệ</a></li>
                        </ul>
                    </div>
                    <button class="open-btn">☰</button>
                </div>
                <div class="logo">
                    <a href="index.php"><img src="upload/img/logo.png" alt="MonaFresh"></a>
                </div>
                <nav class="navigation">
                    <ul>
                        <li><a id="home" href="index.php?page=home">Trang chủ</a></li>
                        <li><a id="about" href="index.php?page=about">Giới thiệu</a></li>
                        <li><a id="store" href="index.php?page=store">Cửa hàng</a></li>
                        <li><a id="directory" href="index.php?page=directory">Danh bạ nhà nông</a></li>
                        <li><a id="knowledge" href="index.php?page=knowledge">Kiến thức</a></li>
                        <li><a id="contact" href="index.php?page=contact">Liên hệ</a></li>
                    </ul>
                </nav>
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm...">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <div class="mobile-navigation">
                <div class="search-overlay">
                <div class="menu-overlay"></div>
                        <div class="search-bar">
                            <input type="text" placeholder="Tìm kiếm..." />
                            <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <button class="search-toggle-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
   </header>
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
</body>
</html>