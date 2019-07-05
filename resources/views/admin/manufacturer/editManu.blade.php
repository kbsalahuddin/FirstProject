@extends('admin.master')
@section('content')
<br />
<br />
<hr/>
  <!--<div>-->
  <h3 style="text-align: center">Admin Edit Panel</h3>
  <div class="container" style="margin-top: 10px;">
    <div class="row">
				<div class="col-md-8">
          <!--<h3 class="text-center text-successs">{{ Session::get('message') }}</h3>-->
          <br/>

          <div class="card">
            <div class="card-body">

							<!--<form action="" method="POST">-->
              {{ Form::open(['url'=>'manufacturer/update-manu', 'method'=>'POST', 'class'=>'form-horizontal', 'name'=>'editManuForm']) }}
								<div class="form-group">
								    <label for="abc" class="col-sm-3 col-form-label">Manufacturer Name</label>
								    <div class="col-sm-9">
								    	<input type="text" value="{{ $manuById->manufacturerName }}" class="form-control" name="manufacturerName">
                      <input type="hidden" value="{{ $manuById->id }}" class="form-control" name="id">
								    </div>
								</div>
								<div class="form-group">
								    <label for="abc1" class="col-sm-3 col-form-label">Manufacturer Description</label>
								    <div class="col-sm-9">
								    	<textarea class="form-control" value=""name="manufacturerDescription" >{{ $manuById->manufacturerDescription }}</textarea>
								    </div>
								</div>
								<div class="form-group">
								    <label for="abc2" class="col-sm-3 col-form-label">Manufacturer Status</label>
								    <div class="col-sm-9">
                      <select class="form-control" name="manufacturerStatus">
                        <option value="published">Published</option>
  								    	<option value="unpublished">Unpublished</option>
                      </select>

								    </div>
								</div>
                <div class="form-group">
								    <div class="col-sm-3"></div>
								    <div class="col-sm-9">
								      	<button type="submit" class="btn btn-success btn-block" name="btn" >Update Manufacturer Info</button>
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
    document.forms['editManuForm'].elements['manufacturerStatus'].value={{ $manuById->manufacturerStatus}}
  </script>
@endsection
