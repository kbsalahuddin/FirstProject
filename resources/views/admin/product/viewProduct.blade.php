@extends('admin.master')
@section('content')
<hr />
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<br />
<table class="table table-bordered table-hover">
  <tr>
    <th>Product ID</th><th>{{$product->id}}</th>
  </tr>
  <tr>
    <th>Product Name</th><th>{{$product->productName}}</th>
  </tr>
  <tr>
    <th>Category Name</th><th>{{$product->categoryName}}</th>
  </tr>
  <tr>
    <th>Manufacturer Name</th><th>{{$product->manufacturerName}}</th>
  </tr>
  <tr>
    <th>Product Price</th><th>{{$product->productPrice}}</th>
  </tr>
  <tr>
    <th>Product Quantity</th><th>{{$product->productQuantity}}</th>
  </tr>
  <tr>
    <th>Product Short Description</th><th>{{$product->productShortDescription}}</th>
  </tr>
  <tr>
    <th>Product Long Description</th><th>{{$product->productLongDescription}}</th>
  </tr>
  <tr>
    <th>Product Image</th><th><img src="{{asset($product->productImage)}}" alt="{{$product->productName}}"/></th>
  </tr><!--because productImage aleardy has the path in DB-->
  <tr>
    <th>Product Status</th><th>{{ $product->productStatus=='published' ? 'Published':'Unpublished' }}</th>
  </tr>
</table>

@endsection
