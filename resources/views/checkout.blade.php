@extends('layouts.app')


@section('content')

<body  style="background-color: #915c83;">
<section class="h-100">
    <div class="container py-5">
      <div class="row d-flex justify-content-center my-4">
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">السلة</h5>
            </div>

            @foreach($data as $row)

            <div class="card-body">
              <!-- Single item -->
              <div class="row">


                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                  <!-- Image -->
                  <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                    <img src="/image/{{$row->image}}" width="250" height="250"
                      class="w-100" alt="" />
                  </div>
                  <!-- Image -->
                </div>

                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                  <!-- Data -->
                  <p><strong>{{$row->itemname}}</strong></p>

                  <a href="#"> ازالة المنتج</a>
                  <!-- Data -->
                </div>

                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                  <!-- Quantity -->
                  <div class="d-flex mb-4" style="max-width: 300px">
                    <button class="btn  px-3 me-2 text-white"  style="background-color: #915c83;"
                      onclick="this.parentNode.querySelector('input[type=number]').stepDown()">-
                      <i class="fas fa-minus"></i>
                    </button>

                    <div class="form-outline">
                      <input id="form1" min="0" name="quantity" value="1" type="number" class="form-control" />
                      <label class="form-label" for="form1">الكمية</label>
                    </div>

                    <button class="btn  px-3 ms-2 text-white"  style="background-color: #915c83;"
                      onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- Quantity -->

                  <!-- Price -->
                  <p class="text-start text-md-center">
                    <strong>{{$row->price}} ريال</strong>
                  </p>
                  <!-- Price -->
                </div>
              </div>
              <!-- Single item -->

              <hr class="my-4" />

              <!-- Single item -->

              <!-- Single item -->
            </div>

            @endforeach
          </div>
          <div class="card mb-4">
            <div class="card-body">
              <p><strong>الوقت المتوقع للشحن </strong></p>
              <p class="mb-0">30.1.2024 - 2.2.2024</p>
            </div>
          </div>
          <div class="card mb-4 mb-lg-0">
            <div class="card-body">
              <p><strong>وسائل الدفع المتوفرة </strong></p>
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                alt="Visa" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                alt="American Express" />
              <img class="me-2" width="45px"
                src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                alt="Mastercard" />

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-header py-3">
              <h5 class="mb-0">الملخص</h5>
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                  المنتجات
                  <span>500 ريال </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                  الشحن
                  <span>مجانا</span>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                  <div>
                    <strong>الإجمالي</strong>
                    <strong>
                      <p class="mb-0">(شامل الضريبة )</p>
                    </strong>
                  </div>
                  <span><strong>500 ريال</strong></span>
                </li>
              </ul>

              <button type="button" class="btn  btn-lg btn-block text-white"  style="background-color: #915c83;">
                Go to checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</body>



@endsection
