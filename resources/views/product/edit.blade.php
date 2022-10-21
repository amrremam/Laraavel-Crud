@extends('product.layout')

@section('content')

<div class="container">

    <div class="card mt-5" style="width: 18rem;">
        <div class="card-body">
            <h1>Edit Product</h1>
      <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">Index</a>
        </div>
      </div>

<form action="{{route('product.update',$product->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mt-5">
      <label for="exampleFormControlInput1">Name</label>
      <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleFormControlInput1" placeholder="Edit Product Name">
    </div>

    <div class="form-group mt-3">
      <label for="exampleFormControlInput1">Price</label>
      <input type="text" name="price" value="{{$product->price}}" class="form-control" id="exampleFormControlInput1" placeholder="Edit Price">
    </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Details</label>
      <textarea type="text" class="form-control" name="details" id="exampleFormControlTextarea1" rows="2">
        {{$product->details}}
      </textarea>
    </div>

    <div class="fromm">
    <button type="submit" class="btn btn-info mt-5">Edit</button>
    </div>
  </form>
</div>



@endsection