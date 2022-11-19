<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Tax;
use App\Models\User;
use Illuminate\Http\Request;

class TaxController extends Controller
{
public function create(){
    return view('Tax.add tax');
}
    public function store(Request $request){

        $request->validate([
            'name'=> "required",
            'tax'=>"required"

]);
        $tax =new Tax();
        $tax->name=$request->name;
        $tax->tax=$request->tax;
        $tax->save();
        return redirect('/tax');

}
public function display(){
    $tax=Tax::orderBy('id')->get();
    return view('Tax.display',compact('tax'));
}
public function edit($id){
    $tax=Tax::find($id);
    return view('Tax.edit',compact('tax'));
}
    public function update(Request $request){
        $tax=Tax::find($request->id);
        $tax->name=$request->name;
        $tax->tax=$request->tax;
        $tax->update();
        return redirect('/tax');
    }
    public function view($id){
        $tax=Tax::where('id',$id)->first();
        return view('Tax.view',compact('tax'));

    }
    public function delete($id){
        Tax::where('id',$id)->delete();
        return redirect('/tax');




}
}
