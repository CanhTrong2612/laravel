@extends('master')
@section("content")
<div class="custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
       
        <div class="slider-container">
          <div class="slider">
            <div class="slide"><img src="https://traicaysachhcm.com/thumbs/1366x560x1/upload/photo/images-slider-9123.jpg" alt="Image 1"></div>
            <div class="slide"><img src="https://traicaysachhcm.com/thumbs/1366x560x1/upload/photo/images-slider-9123.jpg"></div>

            <div class="slide"><img src="https://traicaysachhcm.com/thumbs/1366x560x1/upload/photo/images-slider-9123.jpg" alt="Image 1"></div>
            <!-- Add more slides as needed -->
          </div>
          
        </div>
        <script src="./template/admin/js/script.js"></script>
        <script src="./template/admin/js/main.js"></script>
      
      
        <!-- Left and right controls -->
        {{-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a> --}}
      </div>
      <div class="container">
        <h3 class="font row">All Products</h3>
      <div class="trending-wrapper row" >
        
        @foreach($products as $item)
        
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="trening-item">
            <a href="detail/{{$item['id']}}">
              <img class="trending-image" src="{{$item['gallery']}}">
              <div class="trening-item-text">
                <h5>{{$item['name']}}</h5>
                <h6>{{$item['price']}} đ/kg</h6>
              </div>
            </a>
            <a href="detail/{{$item['id']}}"> <button> ADD TO CART</button></a>
            
          </div>
        </div>
        @endforeach
      </div>
      </div>
      
      </div>
      
</div>


@endsection

