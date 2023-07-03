@extends('welcome')
@section('content')
<main>
    <div class="title-abate">
        <img src="/images/thanhtoan.svg" alt="">
    </div>

    <div class="content-abate">
        <img class="bg-abate-1" src="/images/Trini.svg" alt="">
        <div class="content-left-abate">
            <div class="heading-content-left-abate">
                <img src="/images/vecong.svg" alt="">
            </div>
            <div class="area-content-left-abate">
                <form>
                    <div class="area-box-abate-left">
                        <div class="box-abate">
                            <p>Số tiền thanh toán</p>
                            <input class="input-box box-abate-1" type="text" name="" id=""
                                value="" placeholder="" disabled>
                        </div>
                        <div class="box-abate">
                            <p>Số lượng vé</p>
                            <div>
                                <input class="input-box box-abate-2" type="number" name=""
                                    value="" id="" placeholder="" disabled>
                                <p>vé</p>
                            </div>
                        </div>
                        <div class="box-abate">
                            <p>Ngày sử dụng</p>
                            <input class="input-box box-abate-1" type="text" name="" value=""
                                id="" placeholder="" disabled>
                        </div>
                    </div>

                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Thông tin liên hệ</p>
                            <input class="input-box box-abate-3" type="text" name="" value=""
                                id="" placeholder="Họ và tên" disabled>
                        </div>

                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Điện thoại</p>
                            <input class="input-box box-abate-1" type="text" name="" value=""
                                id="" placeholder="Số điện thoại" disabled>
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Email</p>
                            <input class="input-box box-abate-3" type="email" name="" value=""
                                id="" placeholder="Email" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <img class="content-midlle-abate" src="/images/Vector.svg" alt="">
        <div class="content-right-abate">
            <div class="heading-content-right-abate">
                <img src="/images/tttt.svg" alt="">
            </div>
            <div class="area-content-right-abate">
                <form action="/order-success" method="POST">
                    @csrf
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Số thẻ</p>
                            <input class="input-box box-abate-3 form-control" type="number" name="card_number" id="" placeholder="">
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>Họ tên chủ thẻ</p>
                            <input class="input-box box-abate-3 form-control " type="text" name="card_holder" id="" placeholder=""
                                onkeyup="this.value = this.value.toUpperCase();">
                        </div>
                    </div>
                    <div class="area-box-abate--calendar">
                        <p>Ngày hết hạn</p>
                        <div class="box--calendar">
                            <input class="input-box box-3 form-control " type="text" id="selectedDate" name="expiration_date"
                                placeholder="Ngày sử dụng">
                            <div class="btn-calendar"></div>
                        </div>
                    </div>
                    <div class="area-box-abate">
                        <div class="box-abate">
                            <p>CVV/CVC</p>
                            <input class="input-box box-abate-2 form-control" type="password" name="cvv" id="" placeholder="">
                        </div>
                    </div>
                    <div class="area-box-abate--button-abate">
                        <button class="btn-abate" type="submit" id="myBtn-abate">Thanh toán</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</main>
<link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection