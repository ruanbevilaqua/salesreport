@extends('template')

@section('content')
<form class="form" action="{{url('product')}}" method="post">
@csrf

@if(isset($fields))
    @foreach($fields as $key => $field)
    <div class="form-group">
        <label for="{{$field}}">{{$field}}</label>
        <input class="form-control" required="required" id="{{$field}}" name="{{$field}}">
    </div>
    @endforeach
    <input type="submit" class="btn btn-primary" value="Cadastrar produto">
</form>
@endif


@endsection