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
    <a href="index.php"><img src="{{ asset('img/logo.png') }}" alt="MonaFresh"></a>
</div>
<nav class="navigation">
    <ul>
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="{{ route('home') }}">Trang chủ</a>
        </li>
        <li class="{{ request()->is('product') ? 'active' : '' }}">
            <a href="{{ route('product') }}">Cửa hàng</a>
        </li>
        <li class="{{ request()->is('directory') ? 'active' : '' }}">
            <a href="{{ route('directory') }}">Danh bạ nhà nông</a>
        </li>
        <li class="{{ request()->is('knowledge') ? 'active' : '' }}">
            <a href="{{ route('knowledge') }}">Kiến thức</a>
        </li>
        <li class="{{ request()->is('contact') ? 'active' : '' }}">
            <a href="{{ route('contact') }}">Liên hệ</a>
        </li>
    </ul>
    <div class="search">
        <input type="text" placeholder="Tìm kiếm...">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
</nav>

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
