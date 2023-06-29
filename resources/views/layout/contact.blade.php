@extends('welcome')
@section('content')


<main>
    <div class="title-contact">
        <img src="/images/lienhe.svg" alt="">
    </div>

    <div class="content-contact">
        <div class="contact-left">
            <div class="contact-left-egde">
                <p class="text-contact-left">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                    volutpat tellus quis risus volutpat, ut posuere ex facilisis.
                </p>

                <form class="form-contact" action="" method="post">
                    @csrf
                    <div class="box-contact">
                        <div>
                            <input class="input-contact-1 form-control @error('name') is-invalid @enderror" value="" type="text" placeholder="Tên" name="name" >
                            {{-- @if($errors->has('name'))
                            <div class="text-danger">{{ $errors->first('name') }}</div>
                            @endif --}}
                        </div>
                        <div class="input-contact-2">
                            <input class="w-100 form-control @error('email') is-invalid @enderror" value="" type="email" placeholder="Email" name="email">
                           {{--  @if($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                            @endif --}}
                        </div>
                    </div>

                    <div class="box-contact">
                        <div>
                            <input class="input-contact-1 form-control @error('phone') is-invalid @enderror" value="" type="number" placeholder="Số điện thoại" name="phone">
                            {{-- @if($errors->has('phone'))
                            <div class="text-danger">{{ $errors->first('phone') }}</div>
                            @endif --}}
                        </div>
                        <div class="input-contact-2">
                            <input class="w-100 form-control @error('address') is-invalid @enderror" value="" type="text" placeholder="Địa chỉ" name="address">
                            {{-- @if($errors->has('address'))
                            <div class="text-danger">{{ $errors->first('address') }}</div>
                            @endif --}}
                        </div>
                    </div>

                    <div class="box-contact">
                        <div class="box-textarea">
                            <textarea class="form-control @error('message') is-invalid @enderror" value="" name="message" id="" cols="" rows="4" placeholder="Lời nhắn"></textarea>
                            {{-- @if($errors->has('message'))
                            <div class="text-danger">{{ $errors->first('message') }}</div>
                            @endif --}}
                        </div>
                    </div>

                    <div class="box-contact-button">
                        <button class="btn-contact" id="myBtn" type="submit">Gửi liên hệ</button>
                    </div>

                </form>
            </div>
        </div>

        <div class="contact-right">
            <div class="item-contact-right">
                <div class="item-contact-right-egde">
                    <img src="/images/address.svg" alt="">
                    <div class="text-item-contact-right">
                        <h1>Địa chỉ:</h1>
                        <p>86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                    </div>
                </div>
            </div>

            <div class="item-contact-right">
                <div class="item-contact-right-egde">
                    <img src="/images/mail.svg" alt="">
                    <div class="text-item-contact-right">
                        <h1>Email:</h1>
                        <p>investigate@your-site.com</p>
                    </div>
                </div>
            </div>

            <div class="item-contact-right">
                <div class="item-contact-right-egde">
                    <img src="/images/phone.svg" alt="">
                    <div class="text-item-contact-right">
                        <h1>Điện thoại:</h1>
                        <p>+84 145 689 798</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<img class="alex-contact-1" src="/images/Alex.svg" alt="" srcset="">

<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection