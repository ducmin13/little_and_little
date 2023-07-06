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
                    @foreach ($displayticket as $ticket)
                    <div class="item-ticket">
                        <div class="header-ticket">
                            <div class="img-QR"></div>
                        </div>
                        <div class="body-ticket">
                            <img style="height: 150px; width: 150px; margin-bottom: 20px" src="https://api.qrserver.com/v1/create-qr-code/?data={{ strtoupper($ticket['qrcode']) }}" alt="">
                            <h1>{{ strtoupper($ticket['qrcode']) }}</h1>
                            <h2>VÉ CỔNG</h2>
                            <span>---</span>
                            <p>{{ 'Ngày sử dụng: ' . (new DateTime($ticket['date']))->format('d/m/Y') }}</p>
                        </div>
                        <div class="footer-ticket">
                            <img src="/images/tick1.svg" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="info-page-content">
                    <p class="quantity">Số lượng: {{ $quantity}} vé</p>
                    <p class="num-page">Trang {{ $currentPage }}/{{ $totalPages }} </p>
                </div>
                <div class="pagination">
                    @if ($currentPage > 1)
                    <a href="?page={{ $currentPage - 1 }}" class="pre-ticket-QR"></a>
                    @endif
                    @if ($currentPage < $totalPages) <a href="?page={{ $currentPage + 1 }}" class="next-ticket-QR"></a>
                        @endif
                </div>
            </div>
        </div>

        <div class="btn-download-sendemail">
            <a class="btn-download" href="#">Tải về</a>
            <a class="btn-send-email" href="/send-ticket">Gửi Email</a>
        </div>
        <img class="bg-alvin-abate-success" src="/images/Alvin.svg" alt="">

    </div>
</main>

<link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection