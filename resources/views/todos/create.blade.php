@extends('layouts.app') 
@section('content')
<h1>Create Todo:</h1>

{!! Form::open(['action' => 'TodosController@store','method'=>'POST']) !!} {{ Form::bsText('text',null,['placeholder' =>
'Enter title'])}} {{ Form::bsTextArea('body',null,['placeholder' => 'Enter body']) }} {{ Form::bsText('due',null,['placeholder'
=> 'Enter due date']) }} {{ Form::bsSubmit('Submit',['class'=>'btn btn-success']) }}{!! Form::close() !!}
@endsection