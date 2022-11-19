<?php

namespace App\Http\Controllers;

use App\Mail\AdminEmail;
use App\Models\Admin;
use App\Models\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Psy\Util\Str;

class AdminController extends Controller

{
    public function insert(){
        return view('ADMIN.REG');
    }
    public function store(Request $request){

        $request->validate([
            'name'=> "required",
            'email'=> "required|email",
            'password'=>"required|min:6|max:12"
        ]);
        $admin =new Admin();
        $admin->name=$request->name;
        $admin->email=$request->email;
        $admin->password=Hash::make($request->password);
        $admin->save();
        return redirect('/login')->with('admin.insert','register successfully');


    }
    public function select(){
        return view('ADMIN.select');
    }
    public function login(){
        return view('ADMIN.login');
    }
    public function dashbord(){
        return view('ADMIN.dashbord');
    }

    public function login_user(Request $request)
    {
        $request->validate([
            'email' => "required",
            'password' => "required"
        ]);
        $user = Admin::where('email', '=', $request->email)->first();
        if (!$user){
            return back()->with('fail', "we don't recognize your email");
        }else{
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('log', $user->id);
                return redirect('/display');
            }else{
                return back()->with('fail','incorrect password');
            }
        }

    }


    public function forgot(){
        return view('ADMIN.forget');
    }
    public function reset(Request $request){
        $email=$request->email;
        $remember_token=$request->remember_token;
        return view('ADMIN.reset',['email'=>$email,'remember_token'=>$remember_token]);
    }


    public function forgotpassword(Request $request){
        $validate=\Illuminate\Support\Facades\Validator::make($request->all(),[
            'email'=> 'required|email',
        ]);
        if ($validate->fails()){
            return 'Validation error';
        }else{
            $remember_token=\Illuminate\Support\Str::uuid();
            $get=DB::table('_admin')->where('email',$request->email)->first();
            $forgot=[
                'body'=> route('reset',['email'=>$request->email,'remember_token'=>$remember_token])
            ];
            if ($get){
                Admin::where('email', $request->email)->update([
                    'remember_token'=>$remember_token
                ]);

                Mail::to($request->email)->send(new AdminEmail($forgot));
                return back();
            }
        }


    }
    public function resetpassword(Request $request){
        $validate=\Illuminate\Support\Facades\Validator::make($request->all(),[
            'password1'=>'required',
            'password2'=>'required|same:password1'
        ],[
            'password2.same'=>'password did not matched'
        ]);
        if($validate->fails()){
            return 'something went wrong';
        }
        else{
            $user=DB::table('_admin')->where('email',$request->email)->whereNotNull('remember_token')->where('remember_token',$request->remember_token);

            if($user){
                User::where('email',$request->email)->update([
                    'password'=>Hash::make($request->newpassword),
                    'remember_token'=>null
                ]);
                return redirect('/login');
            }
        }
    }
}
