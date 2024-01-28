<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;







class ItemsController extends Controller{

    public function testapi(){

     //   $response=Http::get('https://api.sampleapis.com/coffee/iced');
      // $data=$response->object();

     //  $apiurl="https://jsonplaceholder.typicode.com/users/4/posts";
      // return view('dashboard.cafe',['data'=>$data]);

    }


    public function Checkout(){
        return view('checkout');


    }
    public function AddtoCart($id){
            // ما اقدر استخدم الكوينت عشان مافي موديل للكارت
            //step1
        DB::table('cart')->insert(['iditem'=>$id]);//save to cart table
        $idgroup=Session::get('id');
        $count=DB::table('cart')->get()->count();
        Session::put('countitem',$count);
        return redirect('showproduct/'.$idgroup);//redirect to showproduct page blade

    }

    public function Showproduct($id){
        $data=Items::where('itemgroupno', $id)
        ->get();
      //  dd($data);
        Session::put('id',$id);

        return view('showproduct',['data'=>$data]);
    }



    public function ShowCart(){
        $data=DB::table('cart')->join('items','cart.iditem','=','items.id')
        ->get();
        return view('checkout',['data'=>$data]);
    }

    public function ShowAllProduct(){

        $data=Items::All();
        $count=$data->count();
      //  dd($count);
        return view('showallproduct',['data'=>$data, 'count'=>$count]);
    }
    public function ShowItemGroup(){
        $data=Itemgroup::All();
        $count=$data->count();
      //  dd($count);
        return view('welcome',['data'=>$data, 'count'=>$count]);
    }

    // public function Edit($x){
    //     $item=Itemgroup::where('id',$x)->first();
    //     return view('editgroupitem', ['item'=>$item]);
    // }

    public function GetItemGroup(){
     $data=Itemgroup::All();
     $issave=true;
     return view('itemgroup',['data'=>$data, 'issave'=> $issave]);

    }
    public function SaveGroupsItems(Request $req)   {

        $data=Itemgroup::create([
            'itemgroupname'=>$req->Itemgp
        ]);

        $data->save();
        return redirect('addgritem');
    }
    public function Displayitem(Request $req)   {


        $data=DB::table('itemgroups')->join('items','itemgroups.id','=','items.itemgroupno')
        ->get();

        return view('dashboard.controlpanel',['data'=>$data]);

        $data->save();
        return redirect('itemgroup');
    }

    public function displayadditemsgroup(){
        $data=Itemgroup::All();

        return view('dashboard.addgroupsitem',['data'=>$data]);
    }

}
