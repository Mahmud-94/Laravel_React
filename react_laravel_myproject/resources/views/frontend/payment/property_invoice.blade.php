<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .invoice-title h2, .invoice-title h3 {
    display: inline-block;
}

.table > tbody > tr > .no-line {
    border-top: none;
}

.table > thead > tr > .no-line {
    border-bottom: none;
}

.table > tbody > tr > .thick-line {
    border-top: 2px solid;
}
    </style>
</head>
<body>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2 class="text-center">Invoice</h2><br><h3 class="pull-right">  Order # {{$order_number}}</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					John Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					Jane Smith<br>
    					1234 Main<br>
    					Apt. 4B<br>
    					Springfield, ST 54321
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br> Stripe
    					{{$order[0]->payment_method}}<br>

    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Payment Date:</strong><br> 17 december, 2024
    					{{$order[0]->created_at}}<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>

    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Property ID</strong></td>

        							<td class="text-right"><strong>Total Amount</strong></td>
                                </tr>
    						</thead>
                            <tfoot>
                                <tr>
        							<th colspan="3"><strong>Subtotal</strong></th>
        							<th class="text-right"><strong>{{$order[0]->total_amount}}</strong></th>

                                </tr>
    						</tfoot>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
                                 @foreach ($orderdetails as $order)


    							<tr>

    								<td class="text-center">{{$order->property->id}}</td>

    								<td class="text-right">{{$order->amount}}</td>
    							</tr>

                                @endforeach

    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
</body>
</html>
