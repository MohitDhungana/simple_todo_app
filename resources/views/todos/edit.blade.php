@extends('layouts.app') 
@section('content')
<a class='btn btn-primary' href="/todo/{{$todo->id}}">Go Back</a>
<h1>Edit Todo:</h1>

{!! Form::open(['action' => ['TodosController@update',$todo->id],'method'=>'POST']) !!} {{ Form::bsText('text',$todo->text,['placeholder'
=> 'Enter title'])}} {{ Form::bsTextArea('body',$todo->body,['placeholder' => 'Enter body']) }} {{ Form::bsText('due',$todo->due,['placeholder'
=> 'Enter due date']) }} {{ Form::hidden('_method','PUT') }} {{ Form::bsSubmit('Submit',['class'=>'btn btn-success']) }}{!!
Form::close() !!}
@endsection