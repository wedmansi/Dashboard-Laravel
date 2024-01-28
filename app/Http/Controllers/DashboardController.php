<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itemgroup;
use App\Models\Items;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use Auth;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function logout(){
    Auth::logout();
    return redirect('login');
    }

    public function Customer(){
        return view('dashboard.customer');

    }

    public function Invoice(){
        return view('dashboard.invoice');

    }


    public function del($x){
        $item=Itemgroup::find($x);
        $item->delete();

        return redirect('itemgroup');
    }

    public function Update(Request $request){
        $item=Itemgroup::find($request->id);
        $item->itemgroupname=$request->namegroup;
        $item->save();
        return redirect('itemgroup');
    }

    public function Edit($x){
        $item=Itemgroup::where('id',$x)->first();
        return view('editgroupitem', ['item'=>$item]);
    }


        // دوال الايتم


    public function delitem($x){
        $item=Items::find($x);
        $item->delete();
        return redirect('additem');
    }

    public function Updateitem(Request $request){
        $item=Items::find($request->id);
        $item->itemname=$request->itemname;
        $item->price=$request->price;
        $item->qty=$request->qty;
        $item->itemgroupno=$request->itemgroupno;
        $item->save();
        return redirect('additem');
    }

    public function Edititem($x){
        $item=Items::where('id',$x)->first();
        return view('dashboard.edititem', ['item'=>$item]);
    }



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


    public function SaveItems(Request $req)   {

        $data=Items::create([
            'itemname'=>$req->itemname,
            'price'=>$req->price,
            'qty'=>$req->qty,
            'image'=>$req->image,
            'itemgroupno'=>$req->itemgroupno

        ]);
        $data->save();
        return redirect('additem');
    }

    public function displayadditems(){
        $data=Items::All();
        return view('dashboard.additem',['data'=>$data]);
    }



    //



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
