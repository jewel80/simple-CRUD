@extends('product.master')
@section('body')
<div class="col-md-8 col-md-offset-2">
			
			
			<form class="form-horizontal" action="{{ url('/product/update') }}" method="POST">
			  {{ csrf_field() }}
			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Product Name</label>
			    <div class="col-sm-10">
			      <input type="name" value="{{$product->productName}}" class="form-control" name="productName" id="inputEmail3">
			      <input type="hidden" value="{{$product->id}}" class="form-control" name="productBodyId" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Product Category</label>
			    <div class="col-sm-10">
			      <input type="name" value="{{$product->productCategory}}" class="form-control" name="productCategory" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Product Descrption</label>
			    <div class="col-sm-10">
			      <textarea rows="6" class="form-control" name="productDescription" >{{$product->productDescription}}</textarea>
			    </div>
			  </div>

			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-success btn-block">Product Save</button>
			    </div>
			  </div>

			</form>
		</div>
@endsection