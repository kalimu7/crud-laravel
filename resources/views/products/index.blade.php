@extends('Products.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel  crud </h2>
                        
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/Product/create') }}" class="btn btn-success">Add New</a>
                        <a href="" class="btn btn-danger" >Back</a>
                    </div>
                    <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $items)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$items->fullname}}</td>
                                        <td>{{$items->address}}</td>
                                        <td>{{$items->mobile}}</td>
                                        <td>
                                            <a href="{{url('/Product/'.$items->id)}}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{url('/Product/'.$items->id.'/edit')}}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{url('Product/'.$items->id)}}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection