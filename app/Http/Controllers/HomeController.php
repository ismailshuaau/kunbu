<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Vessel as Vessels;
use App\Type as Types;
use App\Schedules as Schedules;
use App\Routes as Routes;
use App\Islands as Islands;

class HomeController extends Controller
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
        foreach ($vessels as $vessel) {
            $vessel->type = Types::find($vessel->type_id);
            $vessel->schedules = Schedules::where('vessel_id', '=', $vessel->id)->get();
            foreach($vessel->schedules as $schedule){
                $schedule->routes = Routes::where('schedule_id', '=', $schedule->id)->get();
                foreach($schedule->routes as $route){
                    $route->island = Islands::find($route->island_id);
                }
            }
        }
        $islands = Islands::all();
        $vesseltypes = Types::where('type', '=', '1')->get();
        return view('home')->with(['vessels' => $vessels, 'islands' => $islands, 'types' => $vesseltypes]);
    }
}
