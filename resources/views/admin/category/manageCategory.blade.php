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
        <th style="text-align:center" scope="col">Category Name</th>
        <th style="text-align:center" scope="col">Category Description</th>
        <th style="text-align:center" scope="col">Category Status</th>
        <th style="text-align:center" scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
              <!--<?php //while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>-->
      @foreach($categories as $category)
      <tr>
        <th scope="row">{{ $category->id }}</th>
        <td>{{ $category->categoryName }}</td>
        <td>{{ $category->categoryDescription }}</td>
        <td>{{ $category->categoryStatus == 'published'? 'Published': 'Unpublished'}}</td>
        <td>
          <button type="button" class="btn btn-info btn-xs">
            <a style="color:white; text-decoration:none" href="{{ url('/category/edit-category/'.$category->id) }}">Edit
            </a>
          </button>
          <button type="button" class="btn btn-warning btn-xs">
            <a style="color:black; text-decoration:none"
              href="{{ url('/category/delete-category/'.$category->id) }}" onclick="return confirm('Are you sure you want to delete this row of records?');">Delete
            </a>
          </button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</ul>

@endsection
