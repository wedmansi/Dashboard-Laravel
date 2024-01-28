@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class=" alert  text-center text-white " style="background-color: #915c83; " > <h2>  تعديل بيانات المجموعات  </h2></div>
        <div class="col">
            <div class="card">
                <div class="card-body  d-flex justify-content-center">
                    <form action="{{route('updategr')}}" method="post">
                        @csrf
                        <!-- ضمنت رقم العنصر هيدين عشان اقدر اهندل -->
                       <input type="hidden" name="id" value="{{$item->id}}">
                       <label for="x1">اسم العنصر </label>
                       <input  type="text" name="namegroup" id="x1" value="{{$item->itemgroupname}}">
                       <div class="text-center">
                        <button class="btn text-white mt-5"   style="background: #915c83; width:90px "type="submit">  حفظ</button>
                    </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
