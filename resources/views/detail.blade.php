@extends('master')
@section("content")
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" alt="">
       </div>
       <div class="col-sm-6">
          
       <h2>{{$product['name']}}</h2>
       <h3>Price : {{$product['price']}}</h3>   
       <h4>Details: {{$product['description']}}</h4>
       
       <br><br>
       <form action="/add_to_cart" method="POST">
           @csrf
           <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Add to Cart</button>
       </form>
       <br><br>
       <a href="/"> <button>Go Back</button></a>
       {{-- <form action="/ordernow" method="POST">
        @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
        <button class="btn btn-success">Buy Now</button>
       </form> --}}
       
       <br><br>
    </div>
   </div>
</div>
@endsection