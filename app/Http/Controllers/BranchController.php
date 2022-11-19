<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function insert()
    {
        return view('Branch.Addbranch');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => "required",

            "Address" => "required",
            "city" => "required",
            "state" => "required",
            "pincode" => "required",
            "country" => "required",


        ]);
        $user = new Branch();
        $user->name = $request->name;
        $user->Address = $request->Address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->pincode = $request->pincode;
        $user->country = $request->country;
        $user->save();

        return redirect('/branch');
    }

    public function display()
    {
        $user = Branch::orderBy('id')->get();
        return view('Branch.display', compact('user'));
    }

    public function edit($id)
    {
        $user = Branch::find($id);
        return view('Branch.edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Branch::find($request->id);

        $user->name = $request->name;
        $user->Address = $request->Address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->pincode = $request->pincode;
        $user->country = $request->country;
        $user->update();

        return redirect('/branch');
    }
    public function view($id){
        $user=Branch::where('id',$id)->first();
        return view('Branch.view',compact('user'));

    }
    public function delete($id){
        Branch::where('id',$id)->delete();
        return redirect('/branch');


    }
}
