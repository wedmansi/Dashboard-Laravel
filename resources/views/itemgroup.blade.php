@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row d-flex justify-content-center">
                <div class="col-sm-4">
                    <form action="{{route('save')}}" method="post">
                        @csrf
                        <label for="Itemgp" class="p-2">ادخل اسم المجموعة</label>
                        <input type="text" class="form-control form-control-sm " name="Itemgp" id="itemgroupname">
                        <div class="row">

                        <div class="text-center">
                            <button class="btn text-white mt-5"   style="background: #915c83; width:90px "type="submit">  حفظ</button>
                        </div>
                    </form>
                </div>
            </div>
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



@endsection
