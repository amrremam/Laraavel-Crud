@extends('product.layout')

@section('content')

<div class="container">

    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h1>Show Product</h1>
            <h2 class="card-title text-center"> {{$product->name}} </h2>
            <h4 class="card-title text-center"> {{$product->price}} </h4>
            <p class="card-title text-center"> {{$product->details}} </p>
      <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">Index</a>
        </div>
      </div>
    
@endsection