@extends('layouts.dashboard')

@section('content')



<div class="contaiter " style="width: 1200px">
    <div class="row text-center">
        <div class="col-sm-12 p-5">
         <h1 class=" alert  text-center text-white " style="background-color: #915c83; ">اضافة مجموعات المنتجات  </h1>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('save')}}" method="post">
                        @csrf
                        <label for="Itemgp">اسم المجموعة  </label>
                        <input type="text" name="Itemgp" id="itemgroupname">
                        <div class="row mt-3">
                            <div class="col">
                                <button class="btn text-white "   style="background: #915c83; width:90px "type="submit">  حفظ</button>
                            </div>
                        </div>
                    </form>

        </div>
     </div>


     <div class="card mt-3">
        <div class="card-body">

            <table class="table table-border">
                <thead>
                    <tr>
                        <th> رقم المجموعة</th>
                        <th> اسم المجموعة</th>
                        <th colspan="2"> اجراء</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td>{{$row->itemgroupname}}</td>
                        <td><a href="{{route('editgr',['x'=>$row->id])}}"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="{{route('delgr',['x'=>$row->id])}}"><i class="bi bi-trash3-fill text-danger"></i></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>

</div>

@endsection

