<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FC Thanh Liệt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<header> 
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" style="width:40px;" class="rounded-pill"> 
            </a>
            <a class="navbar-brand" href="/intro">Giới thiệu</a>
            <a class="navbar-brand" href="/team">Đội hình thi đấu</a>
            <a class="navbar-brand" href="/video">Video</a>
            <a class="navbar-brand" href="/news">Tin tức</a>
            <a class="navbar-brand" href="/ticket">Mua vé</a>
            <a class="navbar-brand" href="/product">Săn phẩm</a>
            <a class="navbar-brand" href="/contact">Liên hệ</a>
            <a class="navbar-brand" href="/login">Đăng nhập</a>
        </div>
      </nav>
        
</header>
<body>  
        @yield('content')
</body>
<footer class="bg-dark text-light">
    
    <div class="container py-4">
        <div class="row">
            <div class="col-md-3">
                <img class="logo2" src="{{ asset('images/logo.png') }}">
            </div>
            <div class=" col-md-9 navbar-dark">
                <a class="navbar-brand" href="/intro">Giới thiệu</a>
                <a class="navbar-brand" href="/team">Đội hình thi đấu</a>
                <a class="navbar-brand" href="/video">Video</a>
                <a class="navbar-brand" href="/news">Tin tức</a>
                <a class="navbar-brand" href="/ticket">Mua vé</a>
                <a class="navbar-brand" href="/product">Săn phẩm</a>
                <a class="navbar-brand" href="/contact">Liên hệ</a>
                <a class="navbar-brand" href="/login">Đăng nhập</a>
            <div class="footer-title">
                    <ul class="footer-title-desc-l col-md-5">
                        <a class="footer-title-text" href="/privacy_policy">Chính sách bảo mật thông tin</a>
                        <a class="footer-title-text" href="/return_policy">Chính sách đổi trả</a>
                        <a class="footer-title-text" href="/shipping_policy">Chính sách vận chuyển và kiểm tra hàng</a>
                        <a class="footer-title-text" href="/payment_policy">Chính sách thanh toán</a>
                    </ul>
                    <ul class="footer-title-desc-r col-md-7">
                        <a href="https://www.youtube.com/channel/UC7aUjm3mUbYG85UTIg-cGmw">
                            <img class="footer-icon" src="{{ asset('images/youtube.png') }}" alt="icon">
                        </a>
                        <a href="https://www.facebook.com/HanoiFootballClub.vn/">
                            <img class="footer-icon" src="{{ asset('images/fb.png') }}" alt="icon">
                        </a>
                        <a href="https://www.instagram.com/ngdinhthang1204/">
                            <img class="footer-icon" src="{{ asset('images/ig.png') }}" alt="icon">
                        </a>
                        <p>© Copyright 2022 HANOI Football Club and T&T SPORT JSC</p>
                        <p>All rights reserved. Developed and maintained by HANOI FOOTBALL CLUB</p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
  </footer>
</html>
