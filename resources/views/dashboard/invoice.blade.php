
@extends('layouts.dashboard')

@section('content')




<div class="container d-flex justify-content-center mt-5  position-absolute top-50 start-50 translate-middle"  style="width: 1200px">
 <div class="row">
      <h1 class=" alert  text-center text-white " style="background-color: #915c83; ">فواتير العملاء  </h1>

    <div class="card  ">
        <div class="card-body mx-4">
        <div class="container">
            <p class="my-5 mx-5" style="font-size: 30px;">شكرا لتسوقكم</p>
            <div class="row">
            <ul class="list-unstyled">
                <li class="text-black">ود منسي</li>
                <li class="text-muted mt-1"><span class="text-black">رقم الطلب</span> #12345</li>
                <li class="text-black mt-1">April 17 2023</li>
            </ul>
            <hr>
            <div class="col-xl-10">
                <p> صندوق الماتشا</p>
            </div>
            <div class="col-xl-2">
                <p class="float-end">250 ريال
                </p>
            </div>
            <hr>
            </div>
            <div class="row">
            <div class="col-xl-10">
                <p>الشحن</p>
            </div>
            <div class="col-xl-2">
                <p class="float-end"> 0 ريال
                </p>
            </div>
            <hr>
            </div>

            <div class="row text-black">

            <div class="col-xl-12">
                <p class="float-end fw-bold">المجموع: 250 ريال
                </p>
            </div>
            <hr style="border: 2px solid black;">
            </div>
            <div class="text-center" style="margin-top: 90px;">
            <a><u class="text-info">انضم الى برنامج الولاء</u></a>
            <p>شكرا لتسوقكم في Matcha House  </p>
            </div>

        </div>
        </div>
    </div>
</div>


</div>
@endsection
