<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Manufacturer;
use App\Product;
use DB;
class ProductController extends Controller
{
    //protected $imgUrl;
    public function createProduct(){
      //joint sql taking place
      $categories=Category::where('categoryStatus','published')->get();
      $manufacturers=Manufacturer::where('manufacturerStatus','published')->get();
      return view('admin.product.createProduct', ['categories'=>$categories, 'manufacturers'=>$manufacturers]);
  }
    public function storeProduct(Request $request){

      $this->validate($request,[
        'productName'=>'required',
        'productPrice'=>'required',
        'productImage'=>'required'
      ]);
      $productImage=$request->file('productImage');
      $imgName=$productImage->getClientOriginalName();//show image file name only
      $uploadPath='productImage/';
      $productImage->move($uploadPath,$imgName);//move to productImage folder
      $imgUrl= $uploadPath.$imgName;
      $this->saveProductInfo($request, $imgUrl);
      return redirect('/product/create-product')->with('message','Product Info insertion success!');
      //return $request->all();
    }
    protected function saveProductInfo(Request $request, $imgUrl){
      $product=new Product();
      $product->productName=     $request->productName;
      $product->categoryId=      $request->categoryId;
      $product->manufacturerId=  $request->manufacturerId;
      $product->productPrice=    $request->productPrice;
      $product->productQuantity= $request->productQuantity;
      $product->productShortDescription= strip_tags($request->productShortDescription);
      $product->productLongDescription=  strip_tags($request->productLongDescription);
      $product->productImage=    $imgUrl;
      $product->productStatus=   $request->productStatus;
      $product->save();
    }
    public function manageProduct(){
      $products= DB::table('products')
        ->join('categories','products.categoryId', '=' ,'categories.id')
        ->join('manufacturers','products.manufacturerId', '=' ,'manufacturers.id')
        ->select('products.id','products.productName', 'products.productPrice','products.productQuantity', 'products.productStatus', 'categories.categoryName','manufacturers.manufacturerName')
        ->orderBy('products.id','ASC')
        ->get();

      return view('admin.product.manageProduct',['products'=>$products]);
    }

    public function viewProduct($id){
      $productById= DB::table('products')
        ->join('categories','products.categoryId', '=' ,'categories.id')
        ->join('manufacturers','products.manufacturerId', '=' ,'manufacturers.id')

        ->select('products.*', 'categories.categoryName', 'manufacturers.manufacturerName')
        ->where('products.id', $id)
        ->first();
      return view('admin.product.viewProduct', ['product'=>$productById]);
    }
    public function editProduct($id){

      $categories=Category::where('categoryStatus','published')->get();
      $manufacturers=Manufacturer::where('manufacturerStatus','published')->get();
      $editById=Product::where('id',$id)->first();

      return view('admin.product.editProduct')
              ->with('edit',$editById)
              ->with('categories',$categories)
              ->with('manufacturers',$manufacturers);
    }
    public function updateProduct(Request $request){
        $imgUrl= $this->imgExistStatus($request);
        $product= new Product();
        $product= Product::find($request->id);
        $product->productName=     $request->productName;
        $product->categoryId=      $request->categoryId;
        $product->manufacturerId=  $request->manufacturerId;
        $product->productPrice=    $request->productPrice;
        $product->productQuantity= $request->productQuantity;
        $product->productShortDescription= strip_tags($request->productShortDescription);
        $product->productLongDescription=  strip_tags($request->productLongDescription);
        $product->productImage=    $imgUrl;
        $product->productStatus=   $request->productStatus;
        $product->save();
        return redirect('/product/manage-product')->with('message','Product info updated successfully');
    }

    private function imgExistStatus($request){
      $editById=Product::where('id',$request->id)->first();
      $productImg=$request->file('productImage');
      if($productImg){
        unlink($editById->productImage);
        $imgName=$productImg->getClientOriginalName();//show image file name only
        $uploadPath= 'productImage/';
        $productImg->move($uploadPath,$imgName);//move to productImage folder
        $imgUrl= $uploadPath.$imgName;
      } else{

        $imgUrl= $editById->productImage;
      }

      return $imgUrl;
    }
    public function deleteProduct($id){
      $prod=Product::find($id);
      $prod->delete();
      return redirect('/product/manage-product')->with('message','Record row deleted successfully');
    }

}
