@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">

    {!! Form::open(['url' => 'create/submit']) !!}
    <fieldset>
    <legend>Laravel CRUD System</legend>
    <div class="form-group">
        {{Form::label('title', 'Title', ['class' => 'col-lg-2 control-label']);}}
        <div class="col-lg-10">
    </div>
    <fieldset>
    {!! Form::close() !!}


<!--<form class="form-horizontal">
  <fieldset>
    <legend>Laravel CRUD System</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
      </div>
    </div>
    
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Textarea</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea"></textarea>
      </div>
    </div>
    <div class="form-group">  
    <div class="col-lg-10">
    </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>-->


</div>
</div>
</div>
@endsection