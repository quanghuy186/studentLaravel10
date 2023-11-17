@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Course Page</div>
  <div class="card-body">
      <form action="{{ url('course/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" id="id" />
        <label>Name</label> <br>
        <input type="text" name="name" id="name" value="{{$courses->name}}" class="form-control"><br>
        <label>Syllabus</label><br>
        <input type="text" name="syllabus" id="syllabus" value="{{$courses->syllabus}}" class="form-control"><br>
        <label>Duration</label><br>
        <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <div class="btn btn-warning"><a href="{{ url('/course') }}">Quay lai</a> </div>
    </form>
  </div>
</div>
 
@stop