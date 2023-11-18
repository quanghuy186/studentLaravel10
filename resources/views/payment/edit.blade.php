@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Teacher Page</div>
  <div class="card-body">
      <form action="{{ url('payment/' .$payments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="enrollment_id" id="enrollment_id" value="{{$payments->enrollment->eroll_no}}" id="id" />
        
        <label>Enrollment ID</label><br>
        <select name="enrollment_id" id="enrollment_id" class="form-control">
          @foreach ($enrollments as $id => $eroll_no)
              <option value="{{ $id }}">{{ $eroll_no }}</option>
          @endforeach
        </select> <br>


        <label>paid_date</label> <br>
        <input type="text" name="paid_date" id="paid_date" value="{{$payments->paid_date}}" class="form-control"><br>
            
        <label>amount</label><br>
        <input type="text" name="amount" id="amount" value="{{$payments->amount}}" class="form-control"><br>
        <input type="submit" value="Update" class="btn btn-success"><br>
        <div class="btn btn-warning"><a href="{{ url('/batch') }}">Quay lai</a> </div>

    </form>
  </div>
</div>
 
@stop