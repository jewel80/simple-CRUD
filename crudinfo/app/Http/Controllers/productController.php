<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    public function createProduct(){
    	return view('product.frontEnd.createProduct');
    }

    public function storeProduct(Request $request){
    	$this->validate($request, [
	        'productName' => 'required|unique:products|max:255',
	        'productCategory' => 'required|unique:products|max:255',
	        'productDescription' => 'required',
   		]);

    	$product=new Product;
    	$product->productName = $request->productName;
    	$product->productCategory = $request->productCategory;
    	$product->productDescription = $request->productDescription;
		$product->save();
		return redirect('/product/add')->with('message','Successfully Product Save');
    }

    public function manageProduct(){
        $product = Product::all();
        return view('product.frontEnd.index',compact('product'));
    }

    public function showProduct($id){
        $product=Product::where('id',$id)->first();
        return view('product.frontEnd.showProduct',compact('product'));
    }

    public function updateProduct(Request $request){
        $product= Product::find($request->productBodyId);
        $product->productName = $request->productName;
        $product->productCategory = $request->productCategory;
        $product->productDescription = $request->productDescription;
        $product->save();
        return redirect('/product/manage')->with('message',"Product Update Successfully ");
    }

    public function deleteProduct($id){
        $flight = Product::find($id);
        $flight->delete();
        return redirect('/product/manage')->with('message','Category Delete save successfully');
    }

}
