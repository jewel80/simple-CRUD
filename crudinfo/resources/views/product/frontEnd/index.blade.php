@extends('product.master')
@section('body')
<div class="panel-body">
    <a href="{{ url('/product/add') }}" class="btn btn-success">Product Add</a>
    <h2><span class="text-center text-success">{{ Session::get('message') }}</span></h2>
    <hr>
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
         <thead>
            <tr>
                <th>Id</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($product as $products)
            <tr class="odd gradeA">
                <td>{{ $products->id }}</td>
                <td>{{ $products->productName }}</td>
                <td>{{ $products->productCategory }}</td>
                <td>{{ $products->productDescription}}</td>
                <td>
                    <a href="{{ url('/product/show/'. $products->id) }}" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span></a>
                    <a href="{{ url('/product/delete/'. $products->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure Delete??');"><span class="glyphicon glyphicon-trash" ></span></a>
                </td>
            </tr>
        @endforeach                            
        </tbody>
    </table>
</div>
@endsection