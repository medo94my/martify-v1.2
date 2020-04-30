{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> --}}
        @extends('layouts.app')
        @section('content')
        <div class="container marketing">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
          
            <div id="carouselExampleSlidesOnly" class="carousel slide px-3" data-ride="carousel">
                <div class="carousel-inner ">
                  <div class="carousel-item active">
                      <img src="https://image.freepik.com/free-vector/supermarket-with-food-shelves-illustration_1262-16618.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://image.freepik.com/free-vector/interior-supermarket-store-with-people-character-cashier-buyer_80328-122.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://image.freepik.com/free-vector/supermarket-with-food-shelves-illustration_1262-16618.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
              </div>
        </div>
            <!-- START THE FEATURETTES -->
     
            <hr class="featurette-divider">
     
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">KK Super mart <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Enjoy shopping with KK Super Mart with  a lot of  famous product form food to home application.</p>
                  <p class="lead"> Now with Martify all KK product reach to your door step choose any kind of items Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus rerum, veniam sed nam consequuntur, nobis provident consectetur alias quasi quos modi? Voluptatum, rem. Nam fugiat neque maiores enim provident maxime?</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://image.freepik.com/free-vector/supermarket-logo-template-with-shopping-cart_23-2148470292.jpg" alt="Generic placeholder image" style="height:300px">
              </div>
            </div>
     
            <hr class="featurette-divider">
     
            <div class="row featurette">
                <div class="col-md-5">
                  <img class="featurette-image img-fluid mx-auto" src="https://image.freepik.com/free-vector/supermarket-logo-template-with-shopping-cart_23-2148470292.jpg" alt="Generic placeholder image" style="height:300px">
                </div>
              <div class="col-md-7">
                <h2 class="featurette-heading">7-Eleven <span class="text-muted">Check by yourself.</span></h2>
                <p class="lead">Enjoy shopping with 7-Eleven with  a lot of  famous product such as food .</p>
                  <p class="lead"> Now with Martify all 7-Eleven product reach to your door step choose any kind of items Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque corrupti, voluptatum nihil consequatur, enim quam officia animi sed nostrum ad neque. A aut fugiat illo iusto minima molestias consectetur dicta!</p>
              </div>
            </div>
     
            <hr class="featurette-divider">
     
            <div class="row featurette">
              <div class="col-md-7">
                <h2 class="featurette-heading">Giant hyper markt <span class="text-muted">It'll blow your mind.</span></h2>
                <p class="lead">Enjoy shopping with Giant hyper markt with  a lot of  famous product form food ,grocery, home application and clothing.</p>
                  <p class="lead"> Now with Martify all Giant hyper markt product reach to your door step choose any kind of items Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, quos enim. Excepturi nostrum nesciunt quibusdam facilis vero velit repellendus quae eius ea assumenda? A, unde iste libero animi rem nemo?</p>
              </div>
              <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://image.freepik.com/free-vector/supermarket-logo-template-with-shopping-cart_23-2148470292.jpg" alt="Generic placeholder image" style="height:300px">
              </div>
            </div>
     
            <hr class="featurette-divider">
     
            <!-- /END THE FEATURETTES -->
     
          </div><!-- /.container -->
             </div>
        @endsection