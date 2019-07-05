<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class NewShopController extends Controller
{
    public function index(){

      $newProducts= Product::where('productStatus','published')
                            ->orderBy('id','DESC')
                            ->take(4)
                            ->get();

      return view('front-end.home.home',['newProducts'=>$newProducts]);
    }

    public function categoryProduct($id){
      //warning--->$showCategoryNav has to be same in index() and categoryProduct()----------->
      //$showCategories=Category::where('categoryStatus','published')->get();
      $categoryProducts= Product::where('categoryId',$id)
                    ->where('productStatus','published')
                    ->get();
      return view('front-end.category.category-product',['categoryProducts'=>$categoryProducts]);
    }

    public function productDetails($id){
      $product= Product::find($id);
      return view('front-end.product.product-details',['product'=>$product]);
    }


    public function contactUs(){
      return view('front-end.contact.contact-us');
    }

}
?>
