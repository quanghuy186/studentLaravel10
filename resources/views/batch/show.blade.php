@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Batches Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $batches->name }}</h5>
        <p class="card-text">Course ID : {{ $batches->course_id }}</p>
        <p class="card-text">Phone : {{ $batches->start_date }}</p>
  </div>
  </div>
</div>
@endsection