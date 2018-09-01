<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use Validator;

class RegistrationController extends Controller
{
    //
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        

        // $validator = Validator::make($request->all(), [
        //     'name' => 'required|max:255',
        //     'email' => 'required|email|max:255|unique:users',
        //     'password' => 'required|min:6|confirmed',
        // ]);
        
        if ($validator->fails()) {
            return 'hello';
            return redirect('registerUser')
                        ->withErrors($validator)
                        ->withInput();
        }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        $user->password = $request->password;
        $user->verified = 0;
        $user->save();

        auth()->login($user);

        return redirect('/');
    }
}
