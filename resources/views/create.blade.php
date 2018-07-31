@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
   
        <div class="col-md-2"></div>
        <div class="col-md-8">
     
    {!! Form::open(['url' => 'create/submit']) !!}
    <fieldset>
    <legend class="text-center">Laravel CRUD System</legend>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">
            {{$error}}
            </p>
        @endforeach
    @endif
 
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('description', 'Description')}}
        {{Form::textarea('description', '',['class' => 'form-control'])}}
    </div>

     <div >
        {{Form::submit('Submit'), ['class' => 'btn btn-primary']}}
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