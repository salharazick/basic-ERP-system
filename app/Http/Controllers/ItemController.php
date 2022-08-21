<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item_category;
use App\Models\item;
use App\Models\item_subcategory;
use Illuminate\Support\Facades\DB;

class itemController extends Controller
{   
    
    function addItemview()
    {
        
        $category = item_category::all();
        $subcategory = item_subcategory::all();
        
        return view('additem',['category'=>$category])->with(['subcategory'=>$subcategory]);
    }


    function addItem(Request $req)
    {
       $items = new item;

       $items->item_code = $req->itemcode;
       $items->item_name = $req->itemname;
       $items->item_category = $req->itemcategory;
       $items->item_subcategory = $req->itemsubcategory;
       $items->quantity = $req->quantity;
       $items->unit_price = $req->unitprice;

        $items->save();

       return redirect('item');
      
    }  

     function editItem($id){

        
        $data = item::where('id',$id) -> first();
        $category = item_category::all();
        $subcategory = item_subcategory::all();
       

        return view('edititem',['data'=>$data])->with(['category'=>$category])->with(['subcategory'=>$subcategory]);
  
       }
  
       function updateItem(Request $req){
       // dd($req->all());
      
        $data=item::find($req->id);
       
        $data->item_code = $req->itemcode;
        $data->item_name = $req->itemname;
        $data->item_category = $req->itemcategory;
        $data->item_subcategory = $req->itemsubcategory;
        $data->quantity = $req->quantity;
        $data->unit_price = $req->unitprice;
           
        $data->save();
  
        return redirect('itemslist');  
  
       } 

       function listItem(){

        $items = item::paginate(6);
      return view('itemslist',['items'=>$items]);

       }

       function viewItem($id){
        
        $data = item::where('id',$id) -> first();
    
        return view('viewitem',['data'=>$data]);

       }

       function deleteItem($id){

        $data=item::find($id);
        $data->delete();
  
        return redirect('itemslist');
       }

}


