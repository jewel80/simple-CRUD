@extends('product.master')
@section('body')
<div class="col-md-8 col-md-offset-2">
			<a href="{{ url('/product/manage') }}" class="btn btn-success">Product Show</a>
			<h2><span class="text-center text-success">{{ Session::get('message') }}</span></h2>
			<hr>
			
			<form class="form-horizontal" action="{{ url('/product/save') }}" method="POST">
			  {{ csrf_field() }}
			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Product Name</label>
			    <div class="col-sm-10">
			      <input type="name" class="form-control" name="productName" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Product Category</label>
			    <div class="col-sm-10">
			      <input type="name" class="form-control" name="productCategory" id="inputEmail3">
			    </div>
			  </div>

			  <div class="form-group">
			    <label  class="col-sm-2 control-label">Product Descrption</label>
			    <div class="col-sm-10">
			      <textarea rows="6" class="form-control" name="productDescription" ></textarea>
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