@extends('welcome')
@section('content')

<main>
    <div class="bg-2">
        <div class="title-event">
            <img src="/images/event.svg" alt="">
        </div>
        <div class="content-event">
            <div class="area-event">
                <div class="item-event">
                    <img src="/images/img-event.png" alt="">
                    <div class="body-item-event">
                        <h1>Sự kiện 1</h1>
                        <h2>Vị trí</h2>
                        <h3><img src="/images/calendar.svg" alt="">29/06/2023 - 30/06/2023</h3>
                        <h4>25.000 VNĐ</h4>
                        <a class="btn-infomation" href="/event-detail">Xem chi tiết</a>
                    </div>
                </div>
                <div class="item-event">
                    <img src="/images/img-event.png" alt="">
                    <div class="body-item-event">
                        <h1>Sự kiện 1</h1>
                        <h2>Vị trí</h2>
                        <h3><img src="/images/calendar.svg" alt="">29/06/2023 - 30/06/2023</h3>
                        <h4>25.000 VNĐ</h4>
                        <a class="btn-infomation" href="/event-detail">Xem chi tiết</a>
                    </div>
                </div>
                <div class="item-event">
                    <img src="/images/img-event.png" alt="">
                    <div class="body-item-event">
                        <h1>Sự kiện 1</h1>
                        <h2>Vị trí</h2>
                        <h3><img src="/images/calendar.svg" alt="">29/06/2023 - 30/06/2023</h3>
                        <h4>25.000 VNĐ</h4>
                        <a class="btn-infomation" href="/event-detail">Xem chi tiết</a>
                    </div>
                </div>
                <div class="item-event">
                    <img src="/images/img-event.png" alt="">
                    <div class="body-item-event">
                        <h1>Sự kiện 1</h1>
                        <h2>Vị trí</h2>
                        <h3><img src="/images/calendar.svg" alt="">29/06/2023 - 30/06/2023</h3>
                        <h4>25.000 VNĐ</h4>
                        <a class="btn-infomation" href="/event-detail">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<img class="bg-flag-1" src="/images/flag1.svg" alt="">
<img class="bg-flag-2" src="/images/flag2.svg" alt="">
<link rel="stylesheet" href="{{ asset('css/event.css') }}">
@endsection