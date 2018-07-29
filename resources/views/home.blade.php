@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
    <legend>Laravel CRUD System</legend>
        <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Title</th>
      <th>description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Column content</td>
      <td>Column content</td>
      <td>
          <a href="" class="label label-primary">Read</a>|
          <a href="" class="label label-success">Update</a>|
          <a href="" class="label label-danger">Delete</a>
      </td>
    </tr>
    
  </tbody>
</table> 
    </div>
</div>
@endsection
