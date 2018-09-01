<?php

namespace App\Http\Controllers;

use Request;
use Hash;

use App\Http\Requests;

use App\Operator as Operators;

class OperatorAuthController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('operator.login');
    }

    public function doLogin() {
    	$email = Request::input('email');
        $password = Request::input('password');

        $operator = Operators::where('email', '=', $email)->firstOrFail();

        if (Hash::check($password, $operator->password)) {
        	session(['user' => $operator]);
		    return redirect('operator/dashboard');
		} else {
			return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Invalid Credentials, Please tryagain.!']);
		}

        print_r($operator);
    }
}
