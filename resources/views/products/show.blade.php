@extends('Products.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $prr->fullname }}</h5>
        <p class="card-text">Address : {{ $prr->address }}</p>
        <p class="card-text">Mobile : {{ $prr->mobile }}</p>
  </div>
    </hr>
  </div>
</div>
