<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function Invoice()
    {
        $orders =Payment::all();
        return view('backend.payment.invoice',compact('orders'));

        

        $data = [

            
            'orders' => $orders
    
        ]; 
          $pdf = Pdf::loadView('productInvoice', $data);
    
        //   return $pdf->download('itsolutionstuff.pdf');
        return $pdf->stream('itsolutionstuff.pdf');
    }
}
