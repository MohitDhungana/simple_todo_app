@extends('layouts.app') 
@section('content')
<a class="btn btn-primary" href="/">Go back</a>
<hr>{{--
<h1>{{$todo->text}}</h1> --}}
<div class='container'>
    <h1>{{$todo->text}}</h1>
    <div class="badge badge-danger">{{$todo->due}}</div>
    <p>{{$todo->body}}</p>
    <hr>
</div>
@endsection