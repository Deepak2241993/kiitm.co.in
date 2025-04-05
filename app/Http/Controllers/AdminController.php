<?php

namespace App\Http\Controllers;
use App\Models\User;
use Redirect;
use Auth;
use Session;
use Validator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        if(Auth::check())
        {
            return redirect('/admin/dashboard');
        }
        else
        {
            return view('admin.login');
        }
    }
    public function login_post(Request $request){
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:8'
           ]);
      
           $user_data = array(
            'email'  => $request->get('email'),
            'password' => $request->get('password')
           );
      
           if(Auth::attempt($user_data))
           {
                $request->session()->put('result',Auth::user()->name);
                $response = array('success' => true, 'error' => false, 'message' => 'Login successfully..');
            }
        else{
            $response = array('success' => false, 'error' => true, 'message' => 'Please Check User Details');
             }
        return $response;
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->pull('result');
        return redirect('/login');
      }


    



}

