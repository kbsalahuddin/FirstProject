@extends('admin.master')
@section('content')

<hr/>
  <!--<div>-->
  <div class="container" style="margin-top: 10px;">
    <div class="row">
				<div class="col-md-8">
          <h3 class="text-center text-successs">{{ Session::get('message') }}</h3>
          <br/>
          <div class="card">
            <div class="card-body">

							<!--<form action="" method="POST">-->
              {{ Form::open(['url'=>'/product/update-product', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data','name'=>'editProdForm'] ) }}
								<div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Name</label>
								    <div class="col-sm-9">
								    	<input type="text" class="form-control" name="productName" value="{{$edit->productName}}">
                      <input type="hidden" class="form-control" name="id" value="{{$edit->id}}">
                      <span class="text-danger">{{ $errors->has('productName')? $errors->first('productName'): '' }}</span>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Category Name</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="categoryId">
                        <option>Select Category<!--{{$edit->categoryName}}--></option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                        @endforeach
                      </select>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Manufacturer Name</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="manufacturerId">
                        <option>Select Manufacturer{{$edit->manufacturerName}}</option>
                        @foreach($manufacturers as $manufacturer)
                        <option value="{{ $manufacturer->id }}">{{ $manufacturer->manufacturerName }}</option>
                        @endforeach
                      </select>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Price</label>
								    <div class="col-sm-9">
								    	<input type="number" class="form-control" name="productPrice" value="{{$edit->productPrice}}">
                      <span class="text-danger">{{ $errors->has('productPrice')? $errors->first('productPrice'): '' }}</span>
                    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Quantity</label>
								    <div class="col-sm-9">
								    	<input type="number" class="form-control" name="productQuantity"  value="{{$edit->productQuantity}}">
                      <span class="text-danger">{{ $errors->has('productQuantity')? $errors->first('productQuantity'): '' }}</span>
                    </div>
								</div>

								<div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label" >Product Short Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" name="productShortDescription">{{$edit->productShortDescription}}</textarea>
                      <span class="text-danger">{{ $errors->has('productShortDescription')? $errors->first('productShortDescription'): '' }}</span>
								    </div>
								</div>

                <div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label" >Product Long Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" name="productLongDescription" rows="7">{{$edit->productLongDescription}}</textarea>
                      <span class="text-danger">{{ $errors->has('productLongDescription')? $errors->first('productLongDescription'): '' }}</span>
								    </div>
								</div>

                <div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Product Image</label>
								    <div class="col-sm-9">
								    	<input type="file"  name="productImage" accept="image/*">
                      <img src="{{asset($edit->productImage)}}" alt="{{$edit->productName}}"/>
                      <span class="text-danger">{{ $errors->has('productImage')? $errors->first('productImage'): '' }}</span>
                    </div>
								</div>

								<div class="form-group">
								    <label for="abc2" class="col-sm-3 col-form-label">Product Status</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="productStatus">
                        <option>Selected-{{$edit->productStatus=='published' ? 'Published':'Unpublished' }}</option>

                        <option value="published">Published</option>
                        <option value="unpublished">Unpublished</option>

                      </select>
								    </div>
								</div>
                <div class="form-group">
								    <div class="col-sm-3"></div>
								    <div class="col-sm-9">
								      	<button type="submit" class="btn btn-success btn-block" name="btn" >Update Product Info</button>
								    </div>
								</div>

              <!--</form>-->
              {{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
  </div>
  <script>
    document.forms['editProdForm'].elements['categoryId'].value={{$edit->categoryId}}
    document.forms['editProdForm'].elements['manufacturerId'].value={{$edit->manufacturerId}}
  </script>
@endsection
