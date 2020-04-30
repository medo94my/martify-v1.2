<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Products;
class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $products=Products::all();
        return view('shop.shop',['products'=>$products]);
        }
    public function checkout(){
        $items = \Cart::session(auth()->id())->getContent();
        return view('shop.checkout',compact('items'));
        }

    public function cart(){
        $items = \Cart::session(auth()->id())->getContent();
        return view('shop.cart',\compact('items'));
        }

        public function addTocart($id){
            $product=Products::findOrfail($id);
            \Cart::session(auth()->id())->add(array(
                'id' => $id,
                'name' => $product->name,
                'image' => strval($product->image),
                'price' => $product->price,
                'quantity' => 1,
                'attributes' => array(),
                'associatedModel' => $product
            ));
            return back();
        //     $cart=session()->get('cart');

        //     if(!$cart){
        //         $cart=[
        //             $id=>[
        //                 'name'=>$product->name,
        //                 'image'=>$product->image,
        //                 'price'=>$product->price,
        //                 'quantity'=>1
        //             ]
        //             ];
        //             session()->put('cart',$cart);
        //             return redirect()->back()->with('success','Product added to cart successfully ');
        //     }
        //     if (isset($cart[$id])){
        //         $cart[$id]['quantity']++;
        //         session()->put('cart',$cart);
        //         return redirect()->back()->with('success','Product added to cart successfully ');
        //     }
        //     $cart[$id]=[
        //         'name'=>$product->name,
        //                 'image'=>$product->image,
        //                 'price'=>$product->price,
        //                 'quantity'=>1
        //     ];
        //     session()->put('cart',$cart);
        //         return redirect()->back()->with('success','Product added to cart successfully ');
        }
}
