<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Operator as Operators;

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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerOperatorWithVessel()
    {
        // return view('home');
        print_r(Request::input());
        exit();

        $operator = new Operators;

        $operator->name = Request::input('title');
        $operator->mobile = Auth::user()->entity_id;
        $operator->email = Auth::user()->entity_id;
        $operator->password = Auth::user()->entity_id;
        $operator->status = 0;

        if($operator->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Case report created successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Case report creation failed. Please try again.']);
        }
    }
}
