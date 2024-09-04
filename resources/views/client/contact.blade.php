<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mona Fresh</title>
    <link rel="stylesheet" href="{{ asset('css/layout/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/contact/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile-interface/mobile-navigation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>

<body>
    @extends('layout.layout')

    @section('content')
        <div class="contact-container container">
            <div class="google-map" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.222066284073!2d106.62368036806588!3d10.853785163716562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1706496866340!5m2!1svi!2s"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contact-form" data-aos="fade-left" data-aos-delay="300" data-aos-duration="1000">
                <div class="contact-container-infor">
                    <div class="contact-image">
                        <img src="{{ asset('img/logo-mona.png') }}" alt="Panda">
                    </div>
                    <div class="contact-info">
                        <ul>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM
                            </li>
                            <li>
                                <i class="fas fa-phone"></i>
                                <a href="tel:+84769220162">076 922 0162</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:demonhunterg@gmail.com">demonhunterg@gmail.com</a>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <a href="mailto:mon@mona.media">mon@mona.media</a>
                            </li>
                            <li>
                                <i class="fab fa-skype"></i>
                                <a href="skype:demonhunterp?call">demonhunterp</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-group-title">
                    <h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                </div>
                <div class="divider">
                    <i class="fa-solid fa-paper-plane divider-icon"></i>
                </div>
                <form action="" method="">
                    <div class="form-group">
                        <div class="form-group-item">
                            <input type="text" placeholder="Họ Và Tên" name="name" required>
                            <input type="text" placeholder="Email" name="Email" required>
                            <input type="text" placeholder="Số điện thoại" name="phonenumber" required>
                            <input type="text" placeholder="Địa chỉ" name="address" required>

                        </div>
                        <div class="form-group-item">
                            <textarea id="textarea1" placeholder="Những điều mà bạn muốn chia sẻ với chúng tôi..." name="textarea1"></textarea>
                        </div>
                        <button id="submit-button" type="submit">GỬI</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
