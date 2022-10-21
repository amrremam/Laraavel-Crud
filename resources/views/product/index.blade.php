@extends('product.layout')
@section('content')
    
<div class="container">
<div class="jumbotron">
  <h1 class="mt-5"> WELCOME TO ERORITOO SHOP </h1>
  <hr class="my-4">
  <h1 class="display-4">Show us your products</h1>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="{{route('product.create')}}" role="button">CREATE</a>
    </p>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Details</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>

    <tbody>

      @php
      $x=1;    
      @endphp

      @foreach ($products as $item)    
      <tr>
          <th scope="row">{{$x++}}</th>
          <td>{{$item->name}}</td>
          <td>{{$item->Price}}</td>
          <td>{{$item->Details}}</td>
        <td>
                <div class="row">
                  <div class="col">
                    <a class="btn btn-success" href="{{route('product.edit',$item->id)}}">Edit</a>
                </div>

                <div class="col">
                    <a class="btn btn-warning"" href="{{route('soft.delete',$item->id)}}">Soft Delete</a>
                </div>

                <div class="col">
                    <a class="btn btn-primary"" href="{{route('product.show',$item->id)}}">Show</a>
                </div>

                <div class="col">
                    <form action="{{route('product.destroy',$item->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">DELETE</button>
                    </form>
                  </div>
                </div>

        </td>
          
        </tr>
        @endforeach

    </tbody>
  </table>

{{$products->links()}}
</div>

@endsection