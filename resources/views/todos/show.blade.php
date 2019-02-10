@extends('layouts.app') 
@section('content')
<a class="btn btn-primary" href="/">Go back</a>
<hr>{{--
<h1>{{$todo->text}}</h1> --}}
<div class='container'>
    <h1>{{$todo->text}}</h1>
    <div class="card border-info mb-3">
        <div class="card-body">
            <div class="badge badge-danger">{{$todo->due}}</div>
            <p>{{$todo->body}}</p>
        </div>
    </div>


    <a href="/todo/{{$todo->id}}/edit" class='btn btn-outline-secondary'>Edit</a> {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method'=>'POST','class'=>'float-right'])
    !!} {{ Form::hidden('_method','DELETE') }} {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }} {!! Form::close()
    !!}
    <hr>
</div>
@endsection