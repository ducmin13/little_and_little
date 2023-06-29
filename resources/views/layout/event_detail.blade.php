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

                        <div class="column-- w-column-first">
                            <img class="column-1-img" src="/images/ev1.png" alt="">
                            <div class="body--item">
                                <div class="calendar--date">
                                    <img class="icon-calendar" src="/images/calendar.svg" alt="">
                                    <p>29/06/2023 - 30/06/2023</p>
                                </div>
                                <span>Đầm sen park</span>
                                <h1>25.000 VNĐ</h1>
                            </div>
                        </div>

                        <div class="column-- w-column-second">
                            <div class="column-container">
                                
                                <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic sdsd typesetting, remaining cssa essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, of Lorem Ipsum.
                                </p>
                                <img src="/images/ev2.png" alt="">
                                <p>
                                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, 
                                Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, </p>
                                    <img src="/images/ev3.png" alt="">
                            </div>
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
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection