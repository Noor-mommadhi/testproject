<?php

namespace App\Http\Controllers;

use App\Models\Billing;

use App\Models\makepay;
use App\Models\Product;
use Illuminate\Http\Request;

class Billingcontroller extends Controller
{
    public function insert()
    {
        return view('Billing.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => "required",
            'email'=> "required",
            "Address" => "required",
            "city" => "required",
            "state" => "required",

            "zip"=>"required"


        ]);
        $user = new Billing();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Address = $request->Address;
        $user->city = $request->city;
        $user->state = $request->state;
        $user->pincode = $request->pincode;
        $user->zip = $request->zip;

        $user->save();
        return redirect('/shipping');

    }
    public function display()
    {
        $user = Billing::orderBy('id')->get();
        return view('Billing.display', compact('user'));
    }
    public function paybill(){
        return view('Billing.paybill');
    }
    public function ins(Request $request){
        $request->validate([
            'name' => "required",
            'email'=> "required",
            "phone" => "required",
            "Pname" => "required",
            "payment"=> "required",

            ]);
        $user= new makepay();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->Pname = $request->Pname;
      $user->payment=implode(",",$request->payment);
    $user->amount = $request->amount;

        $user->save();
        return redirect('/payview');

    }
    public function view(){
        $user=makepay::orderBy('id')->get();
        return view('Billing.paydisplay',compact('user'));
    }

}
