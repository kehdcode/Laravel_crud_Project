@extends('layout.app')

@section('content')
<div class="container">
    <div class="row">
    <legend class="text-center">READ ARTICLE</legend>
        <p class="lead"> {{$messages->title}}</p>
        <p> {{$messages->description}}</p>
     </div>
</div>
@endsection
