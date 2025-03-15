<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('products.index',[
            'products'=> Product::get()
        ]);
    }
    public function create(){
        return view('Products.create');
    }
    public function store(Request $request){
        // validate data
        // edit
        $request->validate([
            'name'=> 'required',
            'description'=>'required',
            'image'=> 'required',
        ]);

        // upload image
        // dd($request->all());
       $imageName = time().'.'.$request->image->extension();
       $request->image->move('products', $imageName);

       $product = new Product;
       $product->image = $imageName;
       $product->name = $request->name;
       $product->description = $request->description;

       $product->save();
       return back()->withSuccess('Post Create Successfully !');

    }

    public function edit($id){

        $product = Product::where('id',$id)->first();

        return view('products.edit',['product'=>$product]);

    }
// update
    // public function update(Request $request, $id){
    //     $request->validate([
    //         'name'=> 'required',
    //         'description'=>'required',
    //         'image'=> 'nullable|mimes:png,jpg,jpeg|max:1000_'
    //     ]);

    //     $product = Product::where('id',$id)->first();

    //         if(isset($request->image)){
    //         // dd($request->all());
    //         $imageName = time().'.'.$request->image->extension();
    //         $request->image->move(public_path('products'), $imageName);
    //         $product->image = $imageName;
    //             }
    //    $product->name = $request->name;
    //    $product->description = $request->description;

    //    $product->save();
    //    return back()->withSuccess('Post Updated Successfully !');
    // }
//update
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $product->name = $request->name;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }
    // delete
    public function destroy($id){
        $product = Product::where('id', $id)->first();
         $product->delete();
         return back()->withSuccess('Post Deleted !');
     }

    //  show
    public function show($id){
        $product = Product::where('id', $id)->first();
         return view('products.show',['product'=>$product]);
     }
}
