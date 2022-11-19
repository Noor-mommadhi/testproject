<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function create(){
    return view('Product.Addproduct');
   }

   public function store(Request $request){

       $request->validate([
           'name'=>"required",
           'cost'=>'required',
           'currency'=>'required',
           'tax'=>'required',
           'totalcost'=>'required'
       ]);
       $product=new Product();
       $product->name=$request->name;
       $product->currency=implode(",",$request->currency);
       $product->cost=$request->cost;
       $product->tax=$request->tax;
       $product->totalcost=$request->totalcost;
       $product->visibility=implode(",",$request->visibility);
       $product->save();

       return redirect('/product');


   }
   public function display(){
       $product=Product::where('visibility', 'like', '%admin%')->orderBy('id')->get();
       return view('Product.display',compact('product'));
   }

   public function  edit($id){

       $product=Product::find($id);
       return view('Product.edit',compact('product'));
   }
    public function update(Request $request){
        $product=Product::find($request->id);
        $product->name=$request->name;
        $product->currency=$request->currency;
        $product->cost=$request->cost;
        $product->tax=$request->tax;
        $product->totalcost=$request->totalcost;
        $product->update();

        return redirect('/product');
    }

    public function view($id){
        $product=Product::where('id',$id)->first();
        return view('Product.view',compact('product'));

    }
    public function delete($id){
        Product::where('id',$id)->delete();
        return redirect('/product');


    }

}
