@extends('frontend.layouts.app')

@section('content')


<div class="card text-center text-white bg-white mb-3">
@foreach ($properties as $property)

<h4>Property Title:<p class="card-title"> {{$property->title}}</p> </h4>
  <img src="{{asset($property->photo)}}" width="300px" class="card-img-top" alt="...">
  <div class="card-body">





<h1>{{ $property->title }}</h1>
<p>Price: ${{ $property->price }}</p>
<p>Property ID : {{ $property->id }}</p>

<form action="{{route('payment.store')}}" method="POST">
    @csrf
    <input type="hidden" name="property_id" value="{{ $property->id }}">
    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
            data-key="{{ env('STRIPE_KEY') }}"
            data-amount="{{ $property->price}}"
            data-name="Real Estate Payment"
            data-description="Payment for {{ $property->title }}"
            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
            data-locale="auto"
            data-currency="usd">
    </script>
</form>
@endforeach


  </div>

</div>






@endsection
