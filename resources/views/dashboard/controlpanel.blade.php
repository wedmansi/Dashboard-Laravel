@extends('layouts.dashboard')

@section('content')




<div class="contaiter " style="width: 1200px">
    <div class="row text-center ">
        <div class="col-sm-12 p-5">
         <h1 class=" alert  text-center text-white " style="background-color: #915c83; "> جميع المنتجات    </h1>
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
