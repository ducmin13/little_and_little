@extends('welcome')
@section('content')

<main>
    <div class="bg-3">
        <div class="content-full">
            <div class="title-abate-success">
                <p>Sự kiện 1</p>
            </div>
            <div class="area-content--1">
                <div class="content--1">
                    <div class="content--info-event">
                        @foreach($events as $item)
                        <div class="column-- w-column-first">
                            <img class="column-1-img" src="/images/ev1.png" alt="">
                            <div class="body--item">
                                <div class="calendar--date">
                                    <img class="icon-calendar" src="/images/calendar.svg" alt="">
                                    <p>{{ date('d/m/Y', strtotime($item->start_date)) }} -
                                {{ date('d/m/Y', strtotime($item->end_date)) }}</p>
                                </div>
                                <span>{{ $item->location }}</span>
                                <h1>{{ $item->price}} VNĐ</h1>
                            </div>
                        </div>

                        <div class="column-- w-column-second">
                            <div class="column-container">
                                <img src="/images/ev1.png" alt="">
                                <p> {!! $item->desc !!}</p>
                                <img src="/images/ev2.png" alt="">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<img class="bg-flag-1" src="/images/flag1.svg" alt="">
<img class="bg-flag-2" src="/images/flag2.svg" alt="">
<link rel="stylesheet" href="{{ asset('css/event.css') }}">
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection