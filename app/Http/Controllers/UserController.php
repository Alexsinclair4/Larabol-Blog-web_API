<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(){
        return view('login');
    }

    public function signin(Request $request){
        $request->validate([
            'email'   =>'required|email',
            'password'=>'required'
        ]);
        $credentials=[
            'email'=> $request->email,
            'password'=>$request->password
        ];
        if( Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return back()->with(['error'=>'User login failed']);
    }

    public function register(){
        return view('register');
    }

    public function userupdate(){
        return view('userupdate');
    }
     
    public function profileupdate(request $request){
        $request->validate([
        'firstname'=> 'required',
        'lastname'=>'required',
        'email'=>'required|email|unique:users', 
        ]);
        $users=new User();
        $users->firstname=$request->firstname;
        $users->lastname=$request->lastname;
        $users->email=$request->email;
        if($user->save()){
            return back()->with(['Updated Successfully']);
        }else{
            return back()->with(['Unable To Update']);
        }
    }


    public function signup(Request $request){
        //logic for validation
        $request->validate([
            'firstname'=>'required',
            'lastname' =>'required',
            'email'    =>'required|email|unique:users',
            'password' =>'required|min:6'
        ]);
        //logic to register user
        $user=new User();
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        if( $user->save()){
            return back()->with(['success'=>'user registered successfully !']);
        }
        return back()->with(['error'=>'failed to register user!']);
    }

    public function updatepassword(){  
        return view('updatepassword');
    }
    
    public function editpassword(Request $request){

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required'
        ]);   

        $user = Auth::user();
        if(Hash::check($request->input('old_password'), $user->password)){
        $new_pass=$request->input('new_password');
        $confirm_pass=$request->input('confirm_password');
             if($new_pass==$confirm_pass){
                $hashed_pass=Hash::make($new_pass);
                $user->password=$hashed_pass;
                $user->save();
             }else{
                return back()->with(['new password and old password do not match']);
             }
            return back()->with(['old password is invalid']);
        }
    }

    public function dashboard(){
        $user = Auth::user();
        $id = Auth::id();
        return view('dashboard', ['user_id'=>$id,'firstname'=>$user->firstname]);
    }

    public function home(){
        return view('index');
    } 
}