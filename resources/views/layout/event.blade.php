@extends('welcome')
@section('content')

<main>
    <div class="bg-2">
        <div class="title-event">
            <img src="/images/event.svg" alt="">
        </div>
        <div class="content-event">
            <div class="area-event">
                @foreach($events as $item)
                <div class="item-event">
                    <img src="/images/{{ $item->img }}" alt="">
                    <div class="body-item-event">
                        <h1>{{ $item->name }}</h1>
                        <h2>{{ $item->location }}</h2>
                        <h3><img src="/images/calendar.svg" alt="">{{ date('d/m/Y', strtotime($item->start_date)) }} -
                            {{ date('d/m/Y', strtotime($item->end_date)) }}</h3>
                        <h4>{{ $item->price }} VNĐ</h4>
                        <a class="btn-infomation" href="/event-detail/{{ $item->id }}">Xem chi tiết</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</main>

<img class="bg-flag-1" src="/images/flag1.svg" alt="">
<img class="bg-flag-2" src="/images/flag2.svg" alt="">
<link rel="stylesheet" href="{{ asset('css/event.css') }}">
@endsection