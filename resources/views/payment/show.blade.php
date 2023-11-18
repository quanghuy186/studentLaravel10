@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">payments Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Enroll NO : {{ $payment->enrollment->eroll_no }}</h5>
        <p class="card-text">Paid date : {{ $payment->paid_date }}</p>
        <p class="card-text">Amount : {{ $payment->amount }}</p>
  </div>
  </div>
</div>
@endsection