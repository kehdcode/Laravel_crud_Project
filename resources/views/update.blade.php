@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
   
        <div class="col-md-2"></div>
        <div class="col-md-8">
     
    <!--{!! Form::open(['url' => 'edit/']) !!}-->
    <form method="POST" action="{{ url('/edit', array($messages->id)) }}">
    {{csrf_field()}}
    <fieldset>
    <legend class="text-center">UPDATE ENTRY</legend>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">
            {{$error}}
            </p>
        @endforeach
    @endif
 
    <div class="form-group">
      
        <label for="input">Title</label>
        <input type="text" class="form-control" name="title" value="<?php echo $messages->title; ?>">
    </div>

    <div class="form-group">
      
        <label for="input">Description</label>
        <input type="textArea" class="form-control" name="description" value="<?php echo $messages->description; ?>">
    </div>

     <div>
        <button  type="submit" class="btn btn-primary">Update</button>
        <a href="{{ url('/')}}" class="btn btn-danger">Back</a>
    </div>
    


    </div>
    </div>
</div>
</fieldset>
    {!! Form::close() !!}
    <div class="col-md-2"></div>

</div>
</div>
</div>
@endsection