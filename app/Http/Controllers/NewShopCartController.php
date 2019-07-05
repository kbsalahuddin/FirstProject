<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;
class NewShopCartController extends Controller
{
    public function addToCart(Request $request){
      $product=Product::find($request->id);
      Cart::add([
        'id'=>$request->id,
        'name'=>$product->productName,
        'price'=>$product->productPrice,
        'qty'=>$request->qty,
        'options'=>[
              'image'=> $product->productImage
                    ]
      ]);
      return redirect('/cart/show');
    }

    public function showCart(){
      $cartProducts= Cart::content();//cause return all records
      //return $cartProducts;
      return view('front-end.cart.show-cart',['cartProducts'=>$cartProducts]);
    }

    public function deleteCart($id){
      Cart::remove($id);//cause return all records
      //return $cartProducts;
      return redirect('/cart/show');
    }
    public function updateCart(Request $request){
      Cart::update( $request->rowId, $request->qty);//cause return all records
      //return $cartProducts;
      return redirect('/cart/show');
    }
}
