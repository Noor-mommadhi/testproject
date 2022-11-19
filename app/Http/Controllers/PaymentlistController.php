<?php

namespace App\Http\Controllers;

use App\Models\Paymentlist;
use App\Models\User;
use Faker\Provider\ar_EG\Payment;
use Illuminate\Http\Request;

class PaymentlistController extends Controller
{
    public function insert(){
        return view('payment list data-table.paymentlist');
    }
    public function store(Request $request){

        $request->validate([
            'name'=> "required",
            'email'=> "required|email",
            'phone'=>"required",
            'date'=>"required",
            'branch'=>"required"
        ]);
        $user =new Paymentlist();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->date=$request->date;
        $user->branch=$request->branch;
         $user->save();

       return redirect('/view');
    }
public function display(){
  $user=Paymentlist::orderBy('id')->get();
    return view('payment list data-table.paymentdisplay',compact('user'));
}

}
