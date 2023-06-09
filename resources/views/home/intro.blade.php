@extends('layouts.app')
@section('content')
<div class="intro_page">
    <div class="intro_page_header">
        <div class="intro_page_header_logo">
            <img class="logo" src="{{ asset('images/logo.png') }}"alt="">
        </div>
        <div class="intro_page_header_image">
        </div>
    </div>
    <div class="intro_page_intro">
            <h4>GIỚI THIỆU</h4>
            <p>Dưới sự tài trợ của Tập đoàn T&T, câu lạc bộ Hà Nội – T&T thành lập vào ngày 18 tháng 6 năm 2006. 03 mùa giải đầu tiên, từ một đội bóng gồm đa số các cầu thủ trẻ do huấn luyện viên Triệu Quang Hà (cựu cầu thủ đội tuyển bóng đá Việt Nam và câu lạc bộ Thể Công) dẫn dắt đã liên tiếp thăng ba hạng, từ hạng Ba lên hạng chuyên nghiệp, giành quyền thi đấu ở đấu trường danh giá nhất Việt Nam V-League 2009.
                Bước vào mùa giải 2010, đội bóng Thủ đô có sự thay đổi trên băng ghế huấn luyện, ông Phan Thanh Hùng – trợ lý số 1 của HLV Calisto được mời về với mục tiêu đoạt chức vô địch để dành tặng người hâm mộ nhân dịp Đại lễ 1000 năm Thăng Long – Hà Nội. Sự đồng lòng, quyết tâm của toàn thể thành viên đội bóng đã đưa Hà Nội –T&T bay cao và bước lên ngôi vị cao nhất lần đầu tiên chỉ sau 1 năm góp mặt ở sân chơi cao nhất Việt Nam. Đồng thời, chiếc cúp vô địch còn có ý nghĩa giải tỏa cơn khát danh hiệu của những người yêu bóng đá Hà Thành sau 26 năm chờ đợi (Công An Hà Nội – 1984).
                Kể từ thời điểm đó, Hà Nội – T&T trở thành đội bóng đáng xem nhất của bóng đá Việt Nam, được biết đến bởi phong cách chơi đặc trưng là “ kiểm soát bóng, phối hợp trong phạm vi hẹp” áp dụng trong toàn hệ thống đào tạo của Câu lạc bộ. Sau 15 năm bước lên chuyên nghiệp, đại diện Thủ đô đã sưu tầm đầy đủ tất cả danh hiệu từ cấp độ đội I tới các lứa trẻ thuộc hệ thống thi đấu Quốc gia.  
                Năm 2016 nhân dịp kỷ niệm sinh nhật lần thứ 10, Ủy ban Nhân dân Thành phố Hà Nội đồng ý cho phép đội bóng đổi tên Hà Nội – T&T sang Câu lạc bộ bóng đá Hà Nội và giao toàn quyền quản lý, sử dụng sân vận động Hàng Đãy, với mong muốn đội bóng thể hiện cho ý chí và sức mạnh của nhân dân Thủ đô ngàn năm văn hiến.</p>
    </div>
    <div class="intro_page_trophies">
        <h4>DANH HIỆU</h4>
        <img class="image" src="{{ asset('images/intropage1.jpg') }}"alt="">
    </div>
    <div class="intro_page_leadership">
        <h4>BAN LÃNH ĐẠO</h4>
        <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false" data-bs-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/leadership1.jpg') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/leadership2.jpg') }}" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

    </div>
    <div class="intro_page_stadium">
      <h4>SÂN VẬN ĐỘNG</h4>
      <img src="{{ asset('images/stadium.jpg') }}" alt="">
    </div>
</div>
@endsection