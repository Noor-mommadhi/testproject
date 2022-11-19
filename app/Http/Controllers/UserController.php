<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }


  public function store(Request $request){

      $request->validate([
          'name'=> "required",
          'email'=> "required|email",
         'phone'=>'required',
          "Address"=>"required",
          "city"=>"required",
          "branch"=>"required",
          "state"=>"required",
          "country"=>"required",
          "pincode"=>"required"
      ]);
      $user =new User();
      $user->name=$request->name;
      $user->email=$request->email;
      $user->password=$request->password;
      $user->phone=$request->phone;
      $user->Address=$request->Address;
      $user->branch=$request->branch;
      $user->city=$request->city;
      $user->state=$request->state;
      $user->pincode=$request->pincode;
      $user->country=$request->country;
     $res= $user->save();

     if ($res){
         return redirect('/login')->with('adds.create','you have register successfully');
     }else{
         return back()->with('fail.create','something error');
     }
  }


  public function edit($id){
        $user=User::find($id);
        return view('users.edit',compact('user'));
  }
  public function update(Request $request){
        $user=User::find($request->id);
        $user->name=$request->name;
      $user->email=$request->email;
      $user->password=$request->password;
      $user->update();

return redirect('/user');
  }
 public function view($id){
         $user=User::where('id',$id)->first();
         return view('users.view',compact('user'));

 }
    public function delete($id){
        User::where('id',$id)->delete();
        return redirect('/display');


 }
    public function display(Request  $request){

        $lang = $request->lang;

        if(!is_null($lang)){
            App::setLocale($lang);
        }
        App::setLocale('hi');
        dd(App::getLocale());
        $users=User::orderBy('id')->get();
        return view('users.user',compact('users'));
    }
    public function search(Request $request)
    {
        if ($request->isMethod('post')){
            $name=$request->get('name');
            $data=User::where('first_name','LIKE','%'.$name.'%');
        }return view('users.user',compact('data'));













       /* $search = $request->get('search');
        $post=DB::table('users')->where('name','like','%'.$search.'%')->paginate(2);
        return view('users.user',['posts'=>$post]);
        /*
        if($request->search){
            $sea=User::where('name','like','%'.$request->search.'%')->latest()->paginate(2);
            return view('users.user',compact('sea'));
        }else{
            return redirect('')
        }








        $search = $request['search'] ?? "";
        if ($search != "") {
            //where
            $user = User::where('name', '=', $search)->get();
        } else {
            $user = User::all();
        }
        return view('users.search', compact('user', 'search'));
*/
    }
}
