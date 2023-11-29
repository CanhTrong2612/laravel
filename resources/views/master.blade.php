<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

</body>
<style>
    /* --------------------------------header----------------------- */
    .navbar-default .navbar-brand {
        color: #fff;
        font-weight: bold;
    }
    .navbar-default .navbar-brand:focus, .navbar-default .navbar-brand:hover {
        color: #d1cece;
        background-color: transparent;
    }
    .h2, h2 {
        font-size: 40px;
        font-family: cursive;
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
        font-weight: bold;
    }
    .navbar-default .navbar-nav>li>a:focus, .navbar-default .navbar-nav>li>a:hover {
        color: #d1cece;
        background-color: transparent;
    }                                                   
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    .slider {
        text-align: center;
    }
    /* img.slider-img{
        height: 600px ;
        
    } */
    .custom-product{
        height: 600px
    }
    .slider-container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }
    .slider {
      
        display: flex;
        transition: transform 0.5s ease-in-out;
    }
    .slide {
        
        min-width: 100%;
    }
    .trending-image{
        width: 50%;
        height: 100px;
        margin-top: 25px;
        transition: all 0.3s ease;
    }

    .trending-image:hover {
        transform: translateY(-10%)
    }
    .trening-item{
        text-align: center;
        /* position: flex; */
        /* box-shadow: 10px; */
        /* border: 1px solid #ccc; */
        border-radius: 10px;
        text-align: center;
        background: white;
        margin: 10px 0; 
        cursor: pointer;
        
    }
    h5 {
        margin-bottom: 0;
    }
    .trening-item-text h6{
        /* padding-bottom: 5px; */
        margin: 8px 0 8px 0;
        font-weight: 600;
        color: rgba(247, 195, 6, 0.971);
    }
    .trening-item:hover {
        box-shadow: 3px 3px 5px rgb(243, 239, 239);
        transition: all 0.3s ease;
    }

    .trening-item button {
        border: 2px solid #29a44a;
        width: 120px;
        margin-bottom: 15px;
        color: #29a44a;
        background-color: #fff;
        font-weight: bold;
        font-size: 12px;
    }

    .trening-item button:hover {
        background-color: #29a44a;
        color: #fff;
    }

    .font {
        font-weight: bold;
        padding-top:10px ;
        margin-left: 74px;
        
    }
    .trending-wrapper{
       background: #f8f7f7;
    }
    /* .trending-wrapper h3 {
        margin-left: 44px;
        
    } */
    .detail-img{
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 10px;
        margin-bottom: 10px;
        padding: 30px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
/* ------------------------------------footer------------------------- */
    .container1 {
        max-width: 1024px;
        margin: auto;
    }
    .row1 {
        display: flex;
        flex-wrap: wrap;
    }

    .testimony {
    padding: 50px 0;
    }

    .testimony > h1 {
        font-family: var(--main-text-font);
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    .testimony-items {
        justify-content: space-between;
    }

    .testimony-item {
        width: 30%;
        background-color: #f3d6cf;
        padding: 50px 6px ;
        display: flex;
    }

    .testimony-item:hover img {
        border: 5px solid red;

    }

    .testimony-text h1 {
        font-family: red;
        color: #333;
        font-size: 18px;
        margin: 12px 0 6px;
        font-weight: 900;
        width: 150%;
    }

    .testimony-item i {
        color: rgb(239, 239, 95);
    }

    .testimony-item img {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 50%;
        transition: all 0.5s ease;
        text-align: center;
        margin: 0 8px;
    }

    .testimony-text {
        width: 70%;
        padding-left: 20px;
    }

    .testimony-text p {
        font-family: var(--main-text-font);
        color: #333;
        font-size: 12px;

    }
    

    .panel-footer {
    margin: auto;
    width: 80%;
    height: 250px;
    padding: 30px;
    background-color: #29a44a;
    }

    .h2-footer {
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 20px;
        color: #fff;
        font-weight: 600;
        text-align: center;
    }

    .list {
        width: 25%;
        float: left;
        color: #e6e3e3;
    }

    .list ul {
        list-style-position: inside;
    }

    .list ul li {
        margin-top: 10px;
    }

    .list-contact, .list-connect{
        list-style-type: none;
    }

    .list-2 {
        margin-left: 50px;
    }

    .list-connect {
        margin-left: 30px;
    }

    .li-facebook {
        background-image: url("https://mewxu.net/wp-content/uploads/2017/03/fb_icon.png");
        background-size: 17px;
        background-repeat: no-repeat;
        padding-left: 25px;
    }

    .li-tiktok {
        background-image: url("https://p16-tiktokcdn-com.akamaized.net/obj/tiktok-obj/7d3ffaa759cd19246919b752afb55bd6");
        background-size: 17px;
        background-repeat: no-repeat;
        padding-left: 25px;
    }

    .li-gmail {
        background-image: url("https://nguoinoitieng.tv/images/nnt/105/0/bixd.jpg");
        background-size: 17px;
        background-repeat: no-repeat;
        padding-left: 25px;
    }
     

    
</style>
</html>