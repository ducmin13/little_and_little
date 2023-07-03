@extends('welcome')
@section('content')
<main>
    <div class="content-full">
        <div class="title-abate-success">
            <img src="/images/thanhtoanthanhcong.svg" alt="">
        </div>
        <div class="area-content--">
            <div class="content--">
                <div class="area-ticket-QR">
                    <div class="item-ticket">
                        <div class="header-ticket">
                            <div class="img-QR"></div>
                        </div>
                        <div class="body-ticket">
                            <h1>QR Code</h1>
                            <h2>VÉ CỔNG</h2>
                            <span>---</span>
                            <p>Ngày sử dụng</p>
                        </div>
                        <div class="footer-ticket">
                            <img src="/images/tick1.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="info-page-content">
                    <p class="quantity">Số lượng:  vé</p>
                    <p class="num-page">Trang </p>
                </div>
                {{-- <div class="pagination">
                    @if ($currentPage > 1)
                    <a href="?page={{ $currentPage - 1 }}" class="pre-ticket-QR"></a>
                    @endif
                    @if ($currentPage < $totalPages) <a href="?page={{ $currentPage + 1 }}" class="next-ticket-QR"></a>
                        @endif
                </div> --}}
            </div>
        </div>

        <div class="btn-download-sendemail">
            <a class="btn-download" href="#">Tải về</a>
            <a class="btn-send-email" href="">Gửi Email</a>
        </div>
        <img class="bg-alvin-abate-success" src="/images/Alvin.svg" alt="">

    </div>
</main>

<link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection