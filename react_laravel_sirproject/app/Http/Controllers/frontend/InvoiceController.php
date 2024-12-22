<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;


use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;






class InvoiceController extends Controller
{
    public function InvoiceGenerate(){
        $amount = '1733556565';

       $order =  DB::table('properties')->where('price', $amount)->get();

       $orderdetails =
       DB::table('payments')
       ->join('properties', 'properties.id', '=', 'payments.property_id')
       ->where('payments.amount', $amount)
       ->get();

    //   return view('productInvoice', compact('order', 'order_number', 'orderdetails'));



      $data = [

        'price' => $amount,

        'order' => $order,

        'orderdetails' => $orderdetails

    ];
      $pdf = PDF::loadView('productInvoice', $data);

    //   return $pdf->download('itsolutionstuff.pdf');
    return $pdf->stream('itsolutionstuff.pdf');
    }
}
