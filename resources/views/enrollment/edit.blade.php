@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
      <form action="{{ url('enrollment/' .$enrollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrollments->id}}" id="id" />
        <label>Name</label> <br>
        <input type="text" name="eroll_no" id="eroll_no" value="{{$enrollments->eroll_no}}" class="form-control"><br>
        <label>Address</label><br>
        <input type="text" name="batch_id" id="batch_id" value="{{$enrollments->batch_id}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="student_id" id="student_id" value="{{$enrollments->student_id}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="join_date" id="join_date" value="{{$enrollments->join_date}}" class="form-control"><br>
        <label>Mobile</label><br>
        <input type="text" name="fee" id="fee" value="{{$enrollments->fee}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <div class="btn btn-warning"><a href="{{ url('/teacher') }}">Quay lai</a> </div>

    </form>
  </div>
</div>
 
@stop