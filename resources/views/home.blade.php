@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
    <legend>Laravel CRUD System</legend>
      @if(session('success'))
      <p class="alert alert-success">
      {{session('success')}}
      </p>
      @endif
        <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>TITLE</th>
      <th>DESCRIPTION</th>
      
      <th>TIME POSTED</th>
      <th>ACTION</th>
    </tr>
  </thead>
  <tbody>
  @if(count($messages) > 0)
    @foreach($messages as $message)
    <tr>
      <td>{{$message->id}}</td>
      <td>{{$message->title}}</td>
      <td>{{$message->description}}</td>
      <td>{{$message->created_at}} </td>
      <td>
          <a href='{{ url("/read/{$message->id}") }}' class="label label-primary">Read</a>|
          <a href='{{ url("/update/{$message->id}") }}' class="label label-success">Update</a>|
          <a href='{{ url("/delete/{$message->id}") }}'class="label label-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  @endif
  </tbody>
</table> 
    </div>
</div>
@endsection
