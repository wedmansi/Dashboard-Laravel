@extends('layouts.app')

@section('content')

<head>
    <style>

   .text-lighting {
       text-shadow: 0px 0px 8px rgba(255, 255, 255, 0.8),
                    0px 0px 16px rgba(255, 255, 255, 0.6),
                    0px 0px 32px rgba(255, 255, 255, 0.4),
                    0px 0px 64px rgba(255, 255, 255, 0.2);
   }

    </style>
   </head>

<body style="background-color: #d4b3cb; " >
<div class="container " >

    @foreach ($data as $row)
    <div class="card mt-5" style="background-color: #915c83;">
        <div class="card-body mt-3">
            <div class="row">
                    <div class="col-sm-8 text-start">
                        <br>
                    <h1 class=" text-white text-center mt-4">{{$row->itemname}}</h1>
                    <br>
                    <h3 class=" text-white text-center mt-4"> السعر : {{$row->price}} ريال</h3>
                    </div>


                    <div class="col-sm-4 pt-5 pl-5">
                        <img src="/image/{{$row->image}}" width="250" height="250">
                    </div>

                    </div>

                    <div class="row">

                        <div class="col-sm-4 text-left">
                            <a href="{{route('addtocart',['id'=>$row->id])}}" class="btn btn-light btn-lg me-5 d-flex justify-content-center" style="color: #915c83; font-size:30px" > Add to cart </a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    @endforeach
</div>

</body>
@endsection
