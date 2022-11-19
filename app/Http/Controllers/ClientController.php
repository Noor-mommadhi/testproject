<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientController extends Controller
{
    public function home(){
        return view('Client.home');
    }
    public function reg(){
        return view('Client.reg');
    }
    public function store(Request $request)
    {

        $request->validate([
            'name' => "required",
            'email' => "required|email",

        ]);

        $user=new Client();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/log');

    }
    public function user(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required"
        ]);
        $user=Client::where('email','=',$request->email)->first();
        if (!$user){
            return back()->with('fail',"incorrect email");
        }else{
            if (Hash::check($request->password, $user->password)){

                $request->session()->put('log',$user->id);
                return redirect('/cart');
            }else{
                return back()->with('fail','incorrect pwd');
            }
        }




    }



    public function log(){
        return view('Client.login');
    }
    public function cart(){
        return view('Client.product');
    }
    public function getproduct(){
 return view('Client.P1');
}
    public function getproduct2(){
        return view('Client.P2');
    }
    public function getproduct3(){
        return view('Client.p3');
    }


}
