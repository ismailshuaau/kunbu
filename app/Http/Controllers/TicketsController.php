<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Tickets as Tickets;

class TicketsController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        //
        $tickets = Tickets::all();
        return view('operator.tickets')->with(['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function booking()
    {
        //
        // $vessel = Messages::firstOrNew(array('reg_number' => Request::input('registrationnumber')));
    	$ticket = new Tickets;
    	$ticket->ticket_type = Request::input('tickettype');
    	$ticket->no_of_seats = Request::input('noofseats');
    	$ticket->first_name = Request::input('firstname');
        $ticket->last_name = Request::input('lastname');
        $ticket->email = Request::input('email');
        $ticket->mobile = Request::input('mobilenum');
        $ticket->island_from = Request::input('islandfrom');
        $ticket->island_to = Request::input('islandto');
        $ticket->message = Request::input('message');
        $ticket->vessel_id = Request::input('bookingvesselid');
        $ticket->schedule_id = Request::input('bookingscheduleid');
        $ticket->status = 0;

        if($ticket->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Ticket reservation request sent successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Ticket reservation request failed. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approveTicket()
    {
        //
        $id = Request::input('id');
        $ticket = Tickets::find($id);
        $ticket->status = true;
        if($ticket->save()) {
        	$message = "Your ticket has been approved.
To make payment online send 'kunbu 123456' to 44001";

			$apiURL = 'https://www.experttexting.com/ExptRestApi/sms/json/Message/Send?username=voidbinary&password=V0idSMSB!n@ry0nExpTxtn&api_key=w6i4xhl4fw3utm0&from=Kunbu&type=text';
			$apiUrlToCall = $apiURL."&to=+960".$ticket->mobile."&text=".urlencode($message);
			$jsonResponse = file_get_contents($apiUrlToCall);
            return json_encode(array('status', 'success'));
        } else {
            return json_encode(array('status', 'failed'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markPaid()
    {
        //
        $id = Request::input('id');
        $ticket = Tickets::find($id);
        $ticket->isPaid = true;
        if($ticket->save()) {
            return json_encode(array('status', 'success'));
        } else {
            return json_encode(array('status', 'failed'));
        }
    }

    
}
