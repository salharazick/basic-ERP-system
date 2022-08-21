<?php

namespace App\Http\Controllers;

use App\Models\district;
use Illuminate\Http\Request;
use App\Models\customer;


class CustomerController extends Controller
{

    
    function addCustomerview()
    {
        //Get all district from db that need to sent to view
        $district = district::all();
        
        return view('addcustomer',['district'=>$district]);
    }

    //Post (From submit)
    function addCustomer(Request $req)
    {
        
      //  $data = district::all();
        
        $customer = new customer;

        $customer->title = $req->title;
        $customer->first_name = $req->firstname;
        $customer->middle_name = $req->middlename;
        $customer->last_name = $req->lastname;
        $customer->contact_no = $req->contactno;
        $customer->district = $req->district;

        $customer->save();

       return redirect('customer');
      
    }

    
    function listCustomer(){

        $customer = customer::paginate(6);
      return view('customerlist',['customer'=>$customer]);

     }

     function editCustomer($id){

        $district = district::all();

        $data = customer::where('id',$id) -> first();

        return view('editcustomer',['data'=>$data])->with(['district'=>$district]);
  
       }
  
       function updateCustomer(Request $req){
       // dd($req->all());
      
        $data=customer::find($req->id);
       
        $data->title = $req->title;
        $data->first_name = $req->firstname;
        $data->middle_name = $req->middlename;
        $data->last_name = $req->lastname;
        $data->contact_no = $req->contactno;
        $data->district = $req->district;
           
        $data->save();
  
        return redirect('customerlist');  
  
       } 

    
       function deleteCustomer($id){

        $data=customer::find($id);
        $data->delete();
  
        return redirect('customerlist');
       }

       function viewCustomer($id){
        
        $district = district::find($id);
        $data = customer::find($id);

        return view('viewcustomer',['data'=>$data])->with(['district'=>$district]);

     }
}
