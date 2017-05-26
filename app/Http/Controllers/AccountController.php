<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\DAL\T_Member;
use Validator;
use Hash;


class AccountController extends Controller
{
    public function ShowSignIn()
    {
        return view('index');
    }

    public function ProcessSignIn(Request $request)
    {
        $rules = array(
            'email'    => 'required', // make sure the email is an actual email
            'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
        );
        $messages = [
                'email.required' => 'กรุณากรอกอีเมล์',
                'password.required' => 'กรุณากรอกรหัสผ่าน'
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if (!$validator->fails()) {
            if($user = T_Member::where('email', '=', $request->input('email'))->first())
            {   
                if(Hash::check($request->input('password'),$user->password) && Auth::loginUsingId($user->ID,true) && $user->is_deleted == 0){
                    return redirect()->route('Index');
                } else {
                     return redirect()->route('SignIn')->with('loginstatus', 'ข้อมูลที่คุณกรอกไม่ถูกต้อง');
                }
            }
            else
            {
                 return redirect()->route('SignIn')->with('loginstatus', 'ข้อมูลที่คุณกรอกไม่ถูกต้อง');
            }
        } else {
            return redirect()->route('SignIn')->withErrors($validator);
        }
    }

}

