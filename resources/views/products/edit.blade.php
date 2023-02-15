@extends('Products.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">edit page</div>
  <div class="card-body">
      <form action="{{ url('Product/'.$pr->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH");
        <label>Name</label></br>
        <input type="hidden" name="id" id="id" value="{{$pr->id}}">
        <input type="text" name="fullname" id="fullname" class="form-control"  value="{{$pr->fullname}}" ></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" value="{{$pr->address}}" ></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" value="{{$pr->mobile}}" ></br>
        <label>Mobile</label></br>
        <input type="text" name="grade" id="grade" class="form-control" value="{{$pr->grade}}" ></br>
        <input type="submit" value="update" class="btn btn-success"></br>
    </form>