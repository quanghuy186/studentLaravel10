@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      <form action="{{ url('batch/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" id="id" />
        <label>Name</label> <br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"><br>
        <label>Address</label><br>
        <input type="text" name="address" id="address" value="{{$batches->course_id}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="mobile" id="mobile" value="{{$batches->start_date}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <div class="btn btn-warning"><a href="{{ url('/batch') }}">Quay lai</a> </div>

    </form>
  </div>
</div>
 
@stop