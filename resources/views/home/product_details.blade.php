<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_center{
        display:flex;
        justify-content:center;
        align-items:center;
        padding:30px;
    }
    details-box{
        padding: 15px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
        @include('home.header')
    <!-- end header section -->

    <!-- slider section -->
       
    
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- products section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">
    
        <div class=" col-md-12 ">
          <div class="box">
           
              <div class="div_center">
                <img width ="400" src="{{$data->image}}" alt="">
                {{$data->image}}
              </div>
              <div class="detail-box">
                <h6>
                  {{$data->title}}
                </h6>
                <h6>
                  {{$data->quantity}}
                  <span>
                    
                  </span>
                </h6>
              </div>
              
          </div>
        </div>
        

       
      
  </section>

    
  <!-- end products section -->







  <!-- contact section -->

   
  <!-- end contact section -->

   

  <!-- info section -->

  @include('home.footer')
</body>

</html>