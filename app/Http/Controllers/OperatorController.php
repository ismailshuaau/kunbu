<?php

namespace App\Http\Controllers;

use Request;
use Hash;

use App\Http\Requests;

use App\Operator as Operators;
use App\Vessel as Vessels;
use App\Type as Types;

class OperatorController extends Controller
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
        $vesseltypes = Types::where('type', '=', '1')->get();
        return view('operator')->with(['types' => $vesseltypes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        //
        // $vesseltypes = Types::where('type', '=', '1')->get();
        return view('operator.dashboard');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerOperatorWithVessel()
    {
        // return view('home');
        // print_r(Request::input());
        if(Request::input('password') != Request::input('confirmpassword')) {
        	return json_encode( array('error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Password mismatch, Please try again') );
        }

        $operator = Operators::firstOrNew(array('email' => Request::input('email')));

        $operator->name = Request::input('fullname');
        $operator->mobile = Request::input('tel');
        $operator->email = Request::input('email');
        $operator->password = Hash::make(Request::input('password'));
        $operator->status = 0;

        if($operator->save()) {
        	//create vessel
        	$vessel = Vessels::firstOrNew(array('reg_number' => Request::input('registrationnumber')));
        	// $vessel = new Vessels;
        	$vessel->name = Request::input('vesselname');
	        $vessel->description = '';
	        $vessel->reg_number = Request::input('registrationnumber');
	        $vessel->capacity_seat = Request::input('capacity_seats');
	        $vessel->capacity_volume = Request::input('capacity_volume');
	        $vessel->capacity_weight = Request::input('capacity_weight');
	        $vessel->speed = Request::input('speed');
	        $vessel->type_id = Request::input('vesseltype');
	        $vessel->operator_id = $operator->id;
	        $vessel->status = 0;

	        if($vessel->save()) {
	        	return json_encode( array('error_caption' => 'Completed!', 'error_type' => 'success', 'error_message' => 'Operator registration completed. Please login and verify your account.') );
	        } else {
	            return json_encode( array('error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Vessel creation failed. Please try again.') );
	        }

        } else {
            return json_encode( array('error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Operator creation failed. Please try again.') );
        }
    }
}
