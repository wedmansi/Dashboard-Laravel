@extends('layouts.app')


@section('content')

<head>
 <style>

    *{

        background-color: #915c83;
    }

.text-lighting {
    text-shadow: 0px 0px 8px rgba(255, 255, 255, 0.8),
                 0px 0px 16px rgba(255, 255, 255, 0.6),
                 0px 0px 32px rgba(255, 255, 255, 0.4),
                 0px 0px 64px rgba(255, 255, 255, 0.2);
}

 </style>
</head>
<h3 class="text-lighting text-white text-center mb-5 mt-5" style="background-color: #915c83;"> ملصقات مع كل طلب  +  شحن مجاني للطلبات فوق 199 ريال </h3>


<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="https://img.freepik.com/free-vector/matcha-tea-badges-set_23-2148560256.jpg?w=740&t=st=1706286348~exp=1706286948~hmac=9de1265a077448aea194444d33f91e2eef3bd106e23b09dadd5922edf4eeb34a" class="d-block mx-auto w-50" alt="...">
      </div>
      <div class="carousel-item">
        <img src=" /image/cor1.png " class="d-block mx-auto w-50" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

 <?php $c = 0; ?>

<div class="container mt-5  text-center text-white">
    @while($c < $count)

    <div class="row  d-flex align-items-center justify-content-center">
        <div class="col-sm-4 ">
        <a class="link-offset-2 link-underline link-underline-opacity-0 " href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card ">
                <div class="card-body text-white">
                    <h2>{{$data[$c]->itemgroupname}}</h2>
                    <h3><i class="bi bi-suit-heart-fill text-white text-lighting"></i></h3>
                </div>
            </div>
        </a>
        </div>

        <?php $c++;?>
        @if($c < $count)
        <div class="col-sm-4  ">
        <a class="link-offset-2 link-underline link-underline-opacity-0" href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body text-white">
                    <h2>{{$data[$c]->itemgroupname}}</h2>
                    <h3><i class="bi bi-box2-heart-fill  text-white text-lighting"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif

        @if($c < $count)
        <div class="col-sm-4 text-center">
        <a  class="link-offset-2 link-underline link-underline-opacity-0"  href="{{route('showproduct',['id'=>$data[$c]->id])}}">
            <div class="card">
                <div class="card-body">
                    <h4>{{$data[$c]->itemgroupname}}</h4>
                    <h3><i class="bi bi-collection"></i></h3>
                </div>
            </div>
        </a>
        </div>
        <?php $c++;?>
        @endif

    </div>

    @endwhile
</div>

@endsection
