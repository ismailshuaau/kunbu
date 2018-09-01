<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use Contacts as Contacts;

class MessagesController extends Controller
{
    //

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        //
        // $vessel = Messages::firstOrNew(array('reg_number' => Request::input('registrationnumber')));
    	$message = new Contacts;
    	$message->first_name = Request::input('firstname');
        $message->last_name = Request::input('lastname');
        $message->email = Request::input('email');
        $message->mobile = Request::input('mobilenum');
        $message->message = Request::input('message');
        $message->vessel_id = Request::input('messagevesselid');
        $message->status = 0;

        if($message->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Message sent successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Message sending failed. Please try again.']);
        }
    }
}
