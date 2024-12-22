<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Property;

class PaymentController extends Controller
{
    public function create()
    {
        $properties = Property::all();
        return view('frontend.payment.checkout', compact('properties'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'required|exists:properties,id',
            'property_id' => 'required|exists:properties,id',
            'amount' => 'required',


        ]);

        $client = Client::find($validated['client_id']);
        $property = Property::find($validated['property_id']);
        $amount = $property->price; // Convert to cents
    //   Stripe::setApiKey(config('stripe.sk'));
        Stripe::setApiKey(env('STRIPE_SECRET'));


        try {
            $charge = Charge::create([
                'client' => 'Payment by client ID: ' . $client->id,
                'amount' => $amount,
                'currency' => 'usd',
                'description' => 'Payment for Property ID: ' . $property->id,
                'source' => $validated['stripeToken'],
            ]);

            Payment::create([
                'client_id' => $client->id,
                'property_id' => $property->id,
                'amount' => $property->price,
                'status' => 'completed',
            ]);

            return redirect()->route('home')->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}

