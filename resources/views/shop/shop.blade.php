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
        
        <div class="card-body">
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
      </div>
        <div class="container-fluid">
         <div class="row mx-0">
           <div class="col-lg-2 px-0">
            <div class="card min-vh-100" style="max-width: 13rem;">
              <div class="card-body">
                <h5 class="card-title">Filter</h5>
                <div class="pl-2">

                  <h6 class="card-subtitle mb-2 text-muted">Stores</h6>
                  {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a> --}}
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                      Gaint hypermarket
                    </label>
                  </div>
                </div>
              </div>
            </div>
           </div>
           <div class="col-lg-10 pl-0">
             <div class="d-flex justify-content-between align-items-center bg-light rounded border p-2">
              <form class="form-inline  ">
                <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Sorted by:</label>
                <select id="inputState" class=" p-0">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              
                <div class=" pl-2" role="group" aria-label="Third group">
                  <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-th-large"></i></button>
                  <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-list"></i></button>
                </div>

              </form>
              <nav aria-label="Page navigation example">
                <ul class="pagination mb-0">
                  <li class="page-item">
                    {{-- <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a> --}}
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
             </div>
              <div class="row">
                @foreach ($products as $item)
    {{-- <a href="{{ $link->url }}">{{ $link->title }}</a> --}}
    <div class="col-lg-3 col-md-4 col-sm-12 my-2 " >
      <div class="card shadow" style="width:18rem; height:23rem">
      <img src="{{$item->image}}" class="card-img-top " style="height:210px"alt="...">
      <div class="card-body py-1">
        <div class="d-flex flex-column justify-content-start">
          <span class="card-title w-100" style="font-weight:600; font-family:'Montserrat', sans-serif;white-space: nowrap;
          font-size: .75rem;" style="height:10px">{{$item->name}}</span>
          <span class="badge badge-pill badge-warning text-white " style="background:#ED851B;max-width:4rem;letter-spacing:1.2px;;">1 packet</span>
        </div>
        <div class="d-flex flex-column mt-3">
          <span class="" style="font-family:'Montserrat', sans-serif; font-weight:600;">RM{{$item->price}}
          </span>
            <span class="text-muted" style="font-size:9px; font-family:'Montserrat', sans-serif; font-weight:600; margin-top:-5px ">40.00/each</span>
        <a href="/addTocart/{{$item->id}}" class="btn btn-success rounded-pill w-100 mt-2 " style="width:160; height:31px font-family:'Montserrat', sans-serif; font-weight:900;"><i class="fas fa-cart-plus text-light mr-2"></i> Add to cart</a>
        </div>
      </div>
    </div></div>
    @endforeach
              </div>
           </div>
         </div>
        

             </div>
        @endsection