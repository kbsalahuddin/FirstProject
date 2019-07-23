@extends('admin.master')
@section('content')
<br />
<br />
<h3 class="text-center text-success">{{Session::get('message')}}</h3>
<br />
<ul>
  <table style="text-align:center" class="table table-hover table-bordered">
    <thead>
      <tr>
        <th style="text-align:center" scope="col">SL NO.</th>
        <th style="text-align:center" scope="col">Manufacturer Name</th>
        <th style="text-align:center" scope="col">Manufacturer Description</th>
        <th style="text-align:center" scope="col">Manufacturer Status</th>
        <th style="text-align:center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
              <!--<?php //while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>-->
      @foreach($manus as $manu)
      <tr>
        <th scope="row">{{ $manu->id }}</th>
        <td>{{ $manu->manufacturerName }}</td>
        <td>{{ $manu->manufacturerDescription }}</td>
        <td>{{ $manu->manufacturerStatus == 'published'? 'Published': 'Unpublished'}}</td>
        <td>
          <button type="button" class="btn btn-info btn-xs">
            <a style="color:white; text-decoration:none" href="{{ url('/manufacturer/edit-manu/'.$manu->id) }}">Edit
            </a>
          </button>
          <button type="button" class="btn btn-warning btn-xs">
            <a style="color:black; text-decoration:none"
              href="{{ url('/manufacturer/delete-manu/'.$manu->id) }}" onclick="return confirm('Are you sure you want to delete this row of records?');">Delete
            </a>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</ul>

@endsection
