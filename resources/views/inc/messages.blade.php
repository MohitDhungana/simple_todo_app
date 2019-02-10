@if(count($errors)>0) @foreach($errors->all() as $error)

<div class="alert alert-danger">

    {{$error}}

</div>

@endforeach @endif {{-- SUCCESS --}} @if(session('success'))

<div class="alert alert-success" id="success-alert">
    <button type="button" class="close" data-dismiss="alert">x</button> {{session('success')}}

</div>

@endif @if(session('delete'))

<div class="alert alert-danger" id="delete-alert">
    <button type="button" class="close" data-dismiss="alert">x</button> {{session('delete')}}

</div>

@endif