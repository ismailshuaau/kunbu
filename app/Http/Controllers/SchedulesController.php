<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Vessel as Vessels;
use App\Type as Types;
use App\Schedules as Schedules;
use App\Routes as Routes;
use App\Islands as Islands;

class SchedulesController extends Controller
{
    //
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
        $vessels = Vessels::where('status', '=', '1')->get();
        $vesseltypes = Types::where('type', '=', '1')->get();
        return view('vessels')->with(['vessels' => $vessels, 'types' => $vesseltypes]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexAdmin()
    {
        //
        $schedules = Schedules::all();
        foreach ($schedules as $schedule) {
        	$schedule->routes = Routes::where('schedule_id', '=', $schedule->id)->get();
        }
        $islands = Islands::all();
        $vessels = Vessels::where('operator_id', '=', session('user')->id)->get();
        $vesseltypes = Types::where('type', '=', '1')->get();
        return view('operator.schedule')->with(['vessels' => $vessels, 'schedules' => $schedules, 'islands' => $islands, 'types' => $vesseltypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    	$schedule = new Schedules;
    	$schedule->name = Request::input('schedulename');
        $schedule->start_time = Request::input('starttime');
        $schedule->price = Request::input('price');
        $schedule->on_sunday = '';
        $schedule->on_monday = '';
        $schedule->on_tuesday = '';
        $schedule->on_wednesday = '';
        $schedule->on_thursday = '';
        $schedule->on_friday = '';
        $schedule->on_saturday = '';
        $schedule->vessel_id = Request::input('vesseltype');
        // $vessel->status = 0;

        if($schedule->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Schedule created successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Schedule creation failed. Please try again.']);
        }
    }

    /**
     * Fetch the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getRoutes()
    {
        //
        $scheduleid = Request::input('id');
        $routes = Routes::where('schedule_id', '=', $scheduleid)->get();
        foreach($routes as $route) {
        	$island = Islands::find($route->island_id);
        	$route->island = $island->atoll.' - '.$island->island;
        }
        return json_encode($routes);
    }

    /**
     * reate slide a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createRoute()
    {
        //
        $route = new Routes;

        $route->jetty = Request::input('jetty');
        $route->depurture_time = Request::input('depurturetime');
        $route->schedule_id = Request::input('routescheduleid');
        $route->island_id = Request::input('island');

        if($route->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Route created successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Route creation failed. Please try again.']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
        $id = Request::input('id');
        $schedule = Schedules::find($id); 
        $routes = Routes::where('schedule_id', '=', $schedule->id);
        foreach ($routes as $key => $route) {
        	Routes::destroy($route->id);
        }
        if(Schedules::destroy($id)) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Schedule deleted successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Schedule delete failed. Please try again.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyRoute()
    {
        //
        $id = Request::input('id');
        if(Routes::destroy($id)) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Slider deleted successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Slider delete failed. Please try again.']);
        }
    }
}
