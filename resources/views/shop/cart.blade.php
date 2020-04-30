@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">cart</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if($items)
                    @foreach ($items as $id=>$item)
                        
                    <div class="card mb-3" style="max-width:100%">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                            <img src="{{$item->associatedModel->image }}" class="card-img p-3" width="200" height="200" alt="item {{$item['name']}}">
                            </div>
                            
                            <div class="col-md-8">
                                <div class="card-body">
                                <h5 class="card-title">{{$item['name']}}</h5>
                                <span class="item-price">{{$item['price']}}/1 packet</span>
                                <div class="d-flex justify-content-between align-items-center">
                                <div>
                                <button class="btn btn-light bg-white mx-1" style="width: 36px;
                                height: 36px;" onclick="Qty_decrease({{$id}})">-</button>
                                <label type="text" style="width: 36px;
                                height: 36px;" id="qty-{{$id}}" class="px-2 py-1 rounded border rounded text-center">{{$item['quantity']}}</label>
                                <button style="width: 36px;
                                height: 36px;" class="btn btn-success mx-1" onclick="Qty_increase({{$id}})">+</button>
                                </div>
                                <p class="card-text price" style="font-family: Montserrat;
                                font-style: normal;
                                font-weight: 600;
                                font-size: 24px;
                                line-height: 44px;">RM {{ Cart::get($item->id)->getPriceSum()}}</p>
                                <a href="/delete" class="btn btn-sm btn-danger text-center"><i class="fas fa-trash fs-sm"></i></a>
                                </div>
                                <input type="text" name="note"  class="form-control rounded-pill mt-4">
                                    {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <h5>Total(MYR) : <strong>{{Cart::session(auth()->id())->getTotal() }}</strong></h5>
                <a href="{{route('shop.checkout')}}" class="btn btn-warning w-100" type="button">Checkout</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
