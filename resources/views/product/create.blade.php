@extends('product.layout')

@section('content')

<div class="container">

    <div class="card mt-5" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Create your product</h5>
          <p class="card-text">card title and make up the bulk of the card's content.</p>
      <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">Index</a>
        </div>
      </div>

<form action="{{route('product.store')}}" method="POST">
    @csrf
    <div class="form-group mt-5">
      <label for="exampleFormControlInput1">Name</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Product Name">
    </div>

    <div class="form-group mt-3">
      <label for="exampleFormControlInput1">Price</label>
      <input type="text" name="price" class="form-control" id="exampleFormControlInput1" placeholder="Price">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Details</label>
      <textarea type="text" class="form-control" name="details" id="exampleFormControlTextarea1" rows="2"></textarea>
    </div>

    <div class="fromm">
    <button type="submit" class="btn btn-info">Save</button>
    </div>
  </form>
</div>



@endsection
