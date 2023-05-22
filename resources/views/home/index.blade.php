@extends('layouts.app')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('images/thanhliet1.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/thanhliet2.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/thanhliet3.png') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('images/thanhliet4.png') }}" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
{{-- Intro --}}
<div class="intro">
  <div class="intro-l">
    <div class="intro-title">
      <h4>Giới thiệu</h4>
      <a href="/intro"><i class="fa-solid fa-angles-right"></i></a>
    </div>
    <div class="intro-content">
      <p>Dưới sự tài trợ của Tập đoàn T&T, câu lạc bộ Hà Nội – T&T thành lập vào ngày 18 tháng 6 năm 2006. 03 mùa giải đầu tiên, từ một đội bóng gồm đa số các cầu thủ trẻ do huấn luyện viên Triệu Quang Hà (cựu cầu thủ đội tuyển bóng đá Việt Nam và câu lạc bộ Thể Công) dẫn dắt đã liên tiếp thăng ba hạng, từ hạng Ba lên hạng chuyên nghiệp, giành quyền thi đấu ở đấu trường danh giá nhất Việt Nam V-League 2009.</p>
    </div>
  </div>
  <div class="intro-image">
    <img class="img" src="{{ asset('images/intro.JPG') }}"alt="">
  </div>
</div>
{{-- Team --}}
<div class="team">
  <div class="team-l">
    <div class="team-title">
      <h4>Đội hình</h4>
      <a href="/team"><i class="fa-solid fa-angles-right"></i></a>
    </div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/team1.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/team2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('images/team2.jpg') }}" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
{{-- Video --}}
<div class="video">
  <div class="video-title">
    <h4>Video</h4>
    <a href="/video"><i class="fa-solid fa-angles-right"></i></a>
  </div>
  <div class="listitem">
    @foreach($videos as $video)
          <div class="item">
            <div class="">
              <img class="item-img" src="{{ asset('images/' . $video->image . '.jpg') }}" alt="">
            </div>
            <div class="item-title">
              <span class="desc">{{ $video->title}}</span>
              <span class="time">{{ $video->date}}</span>
            </div>
          </div>
    @endforeach
  </div>
</div>
{{-- Tin tức --}}
<div class="news">
  <div class="news-title">
    <h4>Tin tức</h4>
    <a href="/news"><i class="fa-solid fa-angles-right"></i></a>
  </div>
  <div class="listitem">
    @foreach($news as $news)
          <div class="item">
            <div class="">
              <img class="item-img" src="{{ asset('images/' . $news->image . '.jpg') }}" alt="">
            </div>
            <div class="item-title">
              <span class="desc">{{ $news->title}}</span>
              <span class="time">{{ $news->date}}</span>
            </div>
          </div>
    @endforeach
  </div>
</div>
{{-- Product --}}
<div class="product">
  <div class="product-title">
    <h4>Sản phẩm</h4>
    <a href="/product"><i class="fa-solid fa-angles-right"></i></a>
  </div>
  <div class="list-product">
    @foreach($products as $product)
      <div class="item">
        <div class="">
          <img class="item-img" src="{{ asset('images/' . $product->image . '.jpg') }}" alt="">
        </div>
        <div class="item-title">
          <span class="name">{{ $product->name}}</span>
          <span class="price">{{ $product->price}}</span>
        </div>
      </div>
    @endforeach

  </div>
  <div class="product-img">
    <img class="item-img" src="{{ asset('images/product5.jpg') }}" alt="">
  </div>
</div>
@endsection
  
  
  