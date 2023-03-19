<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\InvoiceTable;
use App\models\InvoiceProduct;
use App\models\Customer;
use App\models\Product;
use DB;

class InvoiceController extends Controller
{
    
    public function create()
    {
        $cust=Customer::get();
        $product=Product::get();
        return view('invoice.create',(['cust'=>$cust,'product'=>$product]));
    }
    public function store(Request $request)
    {

        
        DB::transaction(function()use($request)
        {
        
            $master=new InvoiceTable;
            $master->invoice_num=$request->invoice_num;
            $master->invoice_date=$request->in_date;
            $master->customer_id=$request->customer_id;
            $master->total=$request->total;
            $master->save();
            
            foreach($request->input('product_id') as $key=>$val)
            {
            $detail=new InvoiceProduct;
            $detail->invoice_id=$master->id;
            $detail->product_id=$val;
            $detail->quantity=$request->input('quantity')[$key];
            $detail->rate=$request->input('rate')[$key];
            $detail->amount=$request->input('amount')[$key];
            $detail->save();
            }



        });
    }
}
