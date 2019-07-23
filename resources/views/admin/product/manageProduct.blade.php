@extends('admin.master')
@section('content')

<hr/>
  <!--<div>-->
  <br />
  <br />
  <h3 class="text-center text-success">{{Session::get('message')}}</h3>
  <br />
  <ul>
    <table style="text-align:center" class="table table-hover table-bordered">
      <thead>
        <tr>
          <th style="text-align:center" scope="col">SL NO.</th>
          <th style="text-align:center" scope="col">Product Name</th>
          <th style="text-align:center" scope="col">Category Name</th>
          <th style="text-align:center" scope="col">Manufacturer Name</th>
          <th style="text-align:center" scope="col">Product Price</th>
          <th style="text-align:center" scope="col">Product Quantity</th>
          <th style="text-align:center" scope="col">Product Status</th>
          <th style="text-align:center" scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
                <!--<?php //while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>-->
        @foreach($products as $product)
        <tr>
          <th scope="row">{{ $product->id }}</th>
          <td>{{ $product->productName }}</td>
          <td>{{ $product->categoryName }}</td>
          <td>{{ $product->manufacturerName }}</td>
          <td>bdt. {{ $product->productPrice }}</td>
          <td>{{ $product->productQuantity }}</td>
          <td>{{ $product->productStatus == 'published'? 'Published': 'Unpublished'}}</td>
          <td>


              <a style="color:black;  text-decoration:none" title="Product View" href="{{ url('/product/view-product/'.$product->id) }}">
                <span class="fa fa-search fa-2x"></span>
              </a>

              <a style="color:green;  text-decoration:none" title="Product Edit" href="{{ url('/product/edit-product/'.$product->id) }}">
                <span class="fa fa-edit fa-2x"></span>
              </a>

              <a style="color:red;  text-decoration:none" title="Product Delete"
                href="{{ url('/product/delete-product/'.$product->id) }}" onclick="return confirm('Are you sure you want to delete this row of records?');">
                <span class="fa fa-times-circle fa-2x"></span>
              </a>
            <!--</button>-->
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </ul>

@endsection
