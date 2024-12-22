@extends('shop')

@section('content')
<h1>Order Summary</h1>
<table id="cart" class="table table-bordered" style="width: 40%;">
    <thead>
        <tr>
            <th>Client ID</th>
            <th>Property ID</th>
            <th>Amount</th>

            </tr>


                    </thead>
                    <tbody>
                        <tr>
                            <td data-th="Client ID">
                                <div class="row">
                                    <div class="col-sm-3 hidden-xs"><img src="{{ asset('img') }}/1.jpg" width="100" height="100" class="img-responsive"/></div>
                                    <div class="col-sm-9">
                                        <h4 class="nomargin">{{$client_id}}</h4>
                                    </div>
                                </div>
                            </td>

                            <td data-th="Property ID">{{$property_id}}
                                <input type="number" class="form-control cart_update" />
                            </td>
                            <td data-th="Amount" class="text-center">{{$amount}}</td>
                            <td class="actions" data-th="">
                                <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>

                        <tr>
                            <td colspan="3" style="text-align:right;">
                                <form action="/session" method="POST">

                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type='hidden' name="amount" value="{{$amount}}">
                                <input type='hidden' name="property_id" value="{{$property_id}}">
                                <input type='hidden' name="client_id" value="{{$client_id}}">
                                <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                                </form>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection





<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function Invoice()
    {
        $property_id = '1733556565';

        $orders =
       DB::table('payments')      
       ->join('properties', 'properties.id', '=', 'payments.property_id')
       ->where('payments.property_id', $property_id)
       ->get();

        $data = [

            
            'orders' => $orders,
            'property_id' => $property_id,
    
        ]; 
          $pdf = Pdf::loadView('backend.payment.invoice', $data);
    
        //   return $pdf->download('itsolutionstuff.pdf');
        return $pdf->stream('itsolutionstuff.pdf');
    }
}








// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
//     <style>
//         .invoice-title h2, .invoice-title h3 {
//     display: inline-block;
// }

// .table > tbody > tr > .no-line {
//     border-top: none;
// }

// .table > thead > tr > .no-line {
//     border-bottom: none;
// }

// .table > tbody > tr > .thick-line {
//     border-top: 2px solid;
// }
//     </style>
// </head>
// <body>
// <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
// <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
// <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
// <!------ Include the above in your HEAD tag ---------->

// <div class="container">
//     <div class="row">
//         <div class="col-xs-12">
//     		<div class="invoice-title">
//     			<h2 class="text-center">Invoice</h2><br><h3 class="pull-right">  Property ID # {{$property_id}}</h3>
//     		</div>
//     		<hr>
//     		<div class="row">
//     			<div class="col-xs-6">
//     				<address>
//     				<strong>Billed To:</strong><br>
//     					John Smith<br>
//     					1234 Main<br>
//     					Apt. 4B<br>
//     					Palton, ST 54321
//     				</address>
//     			</div>
//     			<div class="col-xs-6 text-right">
//     				<address>
//         			<strong>Billed By:</strong><br>
//     					Mahmud Hasan<br>
//     					1234 Main<br>
//     					Apt. 4B<br>
//     					Dhaka, ST 54321
//     				</address>
//     			</div>
//     		</div>
//     		<div class="row">
//     			<div class="col-xs-6">
//     				<address>
//     					<strong>Payment Method:</strong><br>
//     					Stripe<br>
    					
//     				</address>
//     			</div>
//                 @foreach ($orders as $order)
//     			<div class="col-xs-6 text-right">
//     				<address>
//     					<strong>Order Date:</strong><br>
//     					{{$orders->created_at}}<br><br>
//     				</address>
//     			</div>
//     		</div>
//     	</div>
//     </div>
    
//     <div class="row">
//     	<div class="col-md-12">
//     		<div class="panel panel-default">
//     			<div class="panel-heading">
//     				<h3 class="panel-title"><strong>Order summary</strong></h3>
//     			</div>
//     			<div class="panel-body">
//     				<div class="table-responsive">
//     					<table class="table table-condensed">
//     						<thead>
//                                 <tr>
//         							<td><strong>ID</strong></td>
//         							<td class="text-center"><strong>Client ID</strong></td>
//         							<td class="text-center"><strong>Property ID</strong></td>
//         							<td class="text-right"><strong>Amount</strong></td>
//                                 </tr>
//     						</thead>
//                             <tfoot>
//                                 <tr>
//         							<th colspan="3"><strong>Subtotal</strong></th>
//         							<th class="text-right"><strong>{{$orders->amount}}</strong></th>
        							
//                                 </tr>
//     						</tfoot>
//     						<tbody>
//     							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                
                                 
                                 
//     							<tr>
//     								<td>{{$order->id}}</td>
//     								<td class="text-center">{{$order->client_id}}</td>
//     								<td class="text-center">{{$order->property_id}}</td>
//     								<td class="text-right">{{$order->amount}}</td>
//     							</tr>

//                                 @endforeach
                                
//     						</tbody>
//     					</table>
//     				</div>
//     			</div>
//     		</div>
//     	</div>
//     </div>
// </div>
// </body>
// </html>
