@extends('layouts.dashboard')

@section('content')

<div class="contaiter " style="width: 1200px">
    <div class="row text-center">
        <div class="col-sm-12 p-5">
            <h1 class=" alert  text-center text-white " style="background-color: #915c83; "> اضافة منتج جديد  </h1>
            <div class="card">
                <div class="card-body" style="color: #915c83; font-size:1em;  ">
                    <div class="row">
                        <div class="col-sm-10">
                    <form action="{{route('saveitem')}}" method="post">
                        @csrf
                        <label for="itemname" style="margin: 10px;">اسم المنتج   </label>
                        <input type="text" name="itemname" id="itemname">
                        <br>
                        <label for="price" style="margin: 10px;">سعر المنتج    </label>
                        <input type="text" name="price" id="price">
                        <br>
                        <label for="qty" style="margin: 10px;">كمية المنتج    </label>
                        <input type="text" name="qty" id="qty">
                        <br>
                        <label for="image" class="mx-5"  >صورة المنتج    </label>
                        <input type="file"  name="image" id="image" >
                            <br>
                        <label for="itemgroupno" style="margin-top: 10px;">مجموعة المنتج   </label>
                        <input type="text" name="itemgroupno" id="itemgroupno">
                        <div class="row mt-3">
                            <div class="col">
                                <button class="btn text-white mt-5"   style="background: #915c83; width:90px "type="submit">  حفظ</button>
                            </div>
                        </div>
                    </form></div> </div>
        </div>
     </div>

     <div class="card mt-3">
        <div class="card-body">
            <table class="table table-border">
                <thead>
                    <tr>
                        <th> رقم العنصر </th>
                        <th> اسم العنصر</th>
                        <th> سعر العنصر</th>
                        <th> كمية العنصر</th>
                        <th> مجموعة العنصر</th>
                        <th colspan="2"> اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->itemname}}</td>
                        <td>{{$row->price}}</td>
                        <td>{{$row->qty}}</td>
                        <td>{{$row->itemgroupno}}</td>
                        <td><a href="{{route('edit',['x'=>$row->id])}}"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="{{route('del',['x'=>$row->id])}}"><i class="bi bi-trash3-fill text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>

</div>

@endsection

