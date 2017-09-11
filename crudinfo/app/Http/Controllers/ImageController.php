<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){
        return view('imageUpload');
    }

    public function upload(Request $request){
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,png,svg|max:2048',
        ]);
		//dd($request->all());
        $imageName = time().".".$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);

        return back()
            ->with('success', 'successfully!')
            ->with('path', $imageName);
    }
}
