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
              {{ Form::open(['url'=>'manufacturer/save-manu', 'method'=>'POST', 'class'=>'form-horizontal']) }}
								<div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Manufacturer Name</label>
								    <div class="col-sm-9">
								    	<input type="text" class="form-control" name="manufacturerName">
                      <span class="text-danger">{{ $errors->has('manufacturerName')? $errors->first('manufacturerName'): '' }}</span>
                    </div>
								</div>
								<div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label" >Manufacturer Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" name="manufacturerDescription"></textarea>
                      <span class="text-danger">{{ $errors->has('manufacturerDescription')? $errors->first('manufacturerDescription'): '' }}</span>
								    </div>
								</div>
								<div class="form-group">
								    <label for="abc2" class="col-sm-3 col-form-label">Manufacturer Status</label>
								    <div class="col-sm-9">
								    	<input type="radio" name="manufacturerStatus" value="published">Published</input>
								    	<input type="radio" name="manufacturerStatus" value="unpublished">Unpublished</input>
								    </div>
								</div>
                <div class="form-group">
								    <div class="col-sm-3"></div>
								    <div class="col-sm-9">
								      	<button type="submit" class="btn btn-success btn-block" name="btn" >Add Manufacturer</button>
								    </div>
								</div>

              <!--</form>-->
              {{ Form::close() }}
						</div>
					</div>
				</div>
			</div>
  </div>
@endsection
