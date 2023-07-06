@extends('welcome')
@section('content')

<main>
    <div class="dam-sen-park">
        <img class="logo" src="/images/logodamsen.png" alt="">
        <div class="text-dam-sen-park">
            <img class="text-damsen" src="/images/damsen.svg" alt=""><br>
            <img class="text-park" src="/images/park.png" alt="">
        </div>
    </div>

    <div class="content-home">
        <div class="content-left">
            <div class="area-content-left">
                <div class="text-content-left">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis justo. Etiam
                        volutpat tellus quis risus volutpat, ut posuere ex facilisis. <br> <br>
                        Suspendisse iaculis libero lobortis condimentum gravida. Aenean auctor iaculis risus,
                        lobortis molestie lectus consequat a.</p>
                </div>
                <div class="area-star-text">
                    <div>
                        <img src="/images/star.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <div>
                        <img src="/images/star.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <div>
                        <img src="/images/star.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                    <div>
                        <img src="/images/star.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    </div>
                </div>
            </div>
        </div>
        <img class="content-midlle" src="/images/Vector.svg" alt="">
        <div class="content-right">
            <div class="heading-content-right">
                
            </div>
            <div class="area-content-right">
                <form action="/order" method="POST">
                    @csrf
                    <div class="box">
                        <select class="input-box box-1 select-mouse form-control" id="" name="order">
                            @foreach($orders as $item)
                            <option class="item-service" value="{{ $item->name }}" data-price="{{ $item->price }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                        <div class="btn-down"></div>
                    </div>
                    <div class="box">
                        <input class="input-box box-4" type="hidden" name="price" id="totalPriceInput"
                            placeholder="Giá vé">
                    </div>

                    <div class="box">
                        <input class="input-box box-2 form-control " type="number" name="quantity" id="quantityInput"
                            placeholder="Số lượng vé" min="0" value="{{ old('quantity') }}">
                        <input class="input-box box-3 form-control " type="text" name="date" id="selectedDate"
                            placeholder="Ngày sử dụng" value="{{ old('date') }}">
                        <div class="btn-calendar"></div>
                    </div>
                    <div class="box">
                        <input class="input-box box-4 form-control " type="text" name="fullname" placeholder="Họ và tên" value="{{ old('fullname') }}">
                    </div>
                    <div class="box">
                        <input class="input-box box-4 form-control " type="text" name="phone" placeholder="Số điện thoại" value="{{ old('phone') }}">
                    </div>
                    <div class="box">
                        <input class="input-box box-4 form-control " type="email" name="email" placeholder="Địa chỉ email" value="{{ old('email') }}">
                    </div>
                    
                    <div class="box-btn">
                        <button class="btn-datve">ĐẶT VÉ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>

<img class="bg-lisa" src="/images/Lisa.png" alt="">
<img class="bg-render" src="/images/render-fix-hair-1.png" alt="">
<img class="bg-18451" src="/images/18451.png" alt="">
<img class="bg-18451_1" src="/images/18451-1.png" alt="">
<img class="bg-18451_2" src="/images/18451-2.png" alt="">
<img class="bg-18451_3" src="/images/18451-3.png" alt="">
<img class="bg-18451_4" src="/images/18451-4.png" alt="">
<img class="bg-18451_5" src="/images/18451-5.png" alt="">

<script>
  $(document).ready(function() {
    $("#selectedDate").datepicker();
  });
</script>

<script>
// Lấy các phần tử trong DOM
const orderSelect = document.querySelector('.select-mouse');
const quantityInput = document.getElementById('quantityInput');
const priceInput = document.getElementById('totalPriceInput');

// Xử lý sự kiện khi người dùng thay đổi lựa chọn mục trong dropdown list
orderSelect.addEventListener('change', function() {
  const price = parseFloat(this.options[this.selectedIndex].dataset.price);
  const quantity = parseInt(quantityInput.value);

  if (!isNaN(price) && !isNaN(quantity) && quantity > 0) {
    const totalPrice = price * quantity;
    priceInput.value = totalPrice.toFixed(0);
  } else {
    priceInput.value = '';
  }
});

// Xử lý sự kiện khi người dùng nhập số lượng vé
quantityInput.addEventListener('input', function() {
  const price = parseFloat(orderSelect.options[orderSelect.selectedIndex].dataset.price);
  const quantity = parseInt(this.value);

  if (!isNaN(price) && !isNaN(quantity) && quantity > 0) {
    const totalPrice = price * quantity;
    priceInput.value = totalPrice.toFixed(0);
  } else {
    priceInput.value = '';
  }
});

</script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection