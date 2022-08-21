<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\customer;

class ReportController extends Controller
{
    function invoiceReport()
    {
        $data = DB::table('customer')
        
        ->select('invoice.*','district.district as district')
        ->join('invoice','customer.id', '=', 'invoice.customer')
        ->join('district','customer.district','=','district.id')
        ->get();

        return view('invoicereport',['data'=>$data]);
    }

    function invoicecustom(){

        $data = customer::paginate(6);
      return view('invoicereport',['data'=>$data]);

     }

    function invoiceItemReport()
    {
        $data = DB::table('customer')
        
        ->select('invoice.invoice_no','invoice.date','customer.first_name','customer.middle_name','customer.last_name','item.*')
       
        ->join('invoice','invoice.customer', '=', 'customer.id')
        ->join('invoice_master','invoice_master.invoice_no','=','invoice.invoice_no')
        ->join('item','item.id','=','invoice_master.item_id')     
        ->get();

        return view('invoiceitemreport',['data'=>$data]);
    }

    function itemReport()
    {
        $data = DB::table('item')

        ->select('item.item_name','item_category.category as itemcategory','item_subcategory.sub_category as itemsubcategory','item.quantity')
        ->join('item_category','item_category.id','=','item.item_category')
        ->join('item_subcategory','item_subcategory.id','=','item.item_subcategory')
        ->get();

        return view('itemreport',['data'=>$data]);
    }

    

}
