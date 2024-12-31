<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;
use Hash;
use Str;
use Auth;

class AuthController extends Controller{
    

    public function index(Request $request){
        return view ('login');
    }

    public function forgot_password(Request $request){
        return view('forgot_password');
    }

    public function register(Request $request){
        return view('register');
    }

    public function register_post(Request $request){
        // dd($request->all());

        $user = request()->validate([
            'name'              => 'required',
            'email'             => 'required|unique:users',
            'password'          => 'required|min:6',
            'confirm_password'  => 'required_with:password|same:password|min:6'
        ]);

        $user = new users;
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();

        return redirect ('/')->with('success','Register successfully');
    }

    public function CheckEmail(Request $request){
        $email = $request->input('email');
        $isExists = users::where('email',$email)->first();
        if($isExists){
            return response()->json(array("exists"=>true));
        }else{
            return response()->json(array("exists"=>false));
        }
    }

    // login

    public function login_post(Request $request){
        if(Auth::attempt(['email' => $request->email,'password' =>$request->password],true)){
            if(Auth::user()->is_role == '1'){
                return redirect()->intended('admin/dashboard');
            }else{
                return redirect('/')->with('error','Bukan akun HR');
            }
        }else{
            return redirect()->back()->with('error','sss');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }
}


?>