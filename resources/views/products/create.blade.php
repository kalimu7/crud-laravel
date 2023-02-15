@extends('Products.layout')
@section('content')

<div class="card" style="margin:20px;">
    <div class="card-header">
        Create New Products
    </div>
    <div class="card-body">
      <form action="{{ url('Product') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="fullname" id="fullname" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="grade" id="grade" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop