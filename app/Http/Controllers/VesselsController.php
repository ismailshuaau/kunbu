<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;

use App\Vessel as Vessels;
use App\Type as Types;
use App\Schedules as Schedules;
use App\Routes as Routes;
use App\Islands as Islands;

class VesselsController extends Controller
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
        $vessels = Vessels::all();
        $vesseltypes = Types::where('type', '=', '1')->get();
        return view('operator.vessels')->with(['vessels' => $vessels, 'types' => $vesseltypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $vessel = Vessels::firstOrNew(array('reg_number' => Request::input('registrationnumber')));
    	// $vessel = new Vessels;
    	$vessel->name = Request::input('vesselname');
        $vessel->tracking_id = Request::input('trackingid');
        $vessel->description = Request::input('description');
        $vessel->reg_number = Request::input('registrationnumber');
        $vessel->capacity_seat = Request::input('capacity_seats');
        $vessel->capacity_volume = Request::input('capacity_volume');
        $vessel->capacity_weight = Request::input('capacity_weight');
        $vessel->speed = Request::input('speed');
        $vessel->type_id = Request::input('vesseltype');
        $vessel->operator_id = session('user')->id;
        $vessel->status = 0;

        if($vessel->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Vessel created successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Vessel creation failed. Please try again.']);
        }
    }

    /**
     * Fetch the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function get()
    {
        //
        $id = Request::input('id');
        $vessel = Vessels::find($id);
        return json_encode($vessel);
    }

    /**
     * Fetch the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function track()
    {
        //
        $id = Request::input('id');
        $vessel_json = file_get_contents("https://m.followme.mv/public/get_my.php?a=undefined&id=".$id);
        return $vessel_json;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        //
        $vesselid = Request::input('vesselid');
        $vessel = Vessels::find($vesselid);

        $vessel->type_id = Request::input('vesseltype');
        $vessel->name = Request::input('vesselname');
        $vessel->tracking_id = Request::input('trackingid');
        $vessel->reg_number = Request::input('registrationnumber');
        $vessel->capacity_seat = Request::input('capacity_seats');
        $vessel->capacity_volume = Request::input('capacity_volume');
        $vessel->capacity_weight = Request::input('capacity_weight');
        $vessel->speed = Request::input('speed');
        $vessel->description = Request::input('description');

        if($vessel->save()) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Vessel informations updated successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Vessel informations updated failed. Please try again.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function updateImage()
    {
        //
        $imagevesselid = Request::input('imagevesselid');
        $vessel = Vessels::find($imagevesselid);

        $file = Request::file('file');
        $cover = Request::file('coverfile');

        $file_moved = false;
        $cover_moved = false;

        $genstr = self::generateRandomString();
        $cropsize = "-image(480x320-crop)";
        $filename = $genstr.$cropsize.".".$file->getClientOriginalExtension();

        if(Request::hasFile('file')){
            $file_moved = $file->move('img', $genstr.".".$file->getClientOriginalExtension());
            $vessel->image_path = "img/".$filename;
            $vessel->image_filename = $filename;
        }

        if($file_moved) {
            if($vessel->save()) {
                return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Vessel image changed successfully.']);
            } else {
                return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Vessel image updated failed. Please try again.']);
            }
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'File upload failed. Please try again.']);
        }

    }

    /**
     * Toggle state of  the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function toggle()
    {
        //
        $id = Request::input('id');
        $vessel = Vessels::find($id);

        if($vessel->status == true) {
            $vessel->status = false;
        } else {
            $vessel->status = true;
        }

        if($vessel->save()) {
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
    public function destroy()
    {
        //
        $id = Request::input('id'); 
        if(Vessels::destroy($id)) {
            return redirect()->back()->with(['error_caption' => 'Success!', 'error_type' => 'success', 'error_message' => 'Vessel deleted successfully.']);
        } else {
            return redirect()->back()->with(['error_caption' => 'Error!', 'error_type' => 'error', 'error_message' => 'Vessel delete failed. Please try again.']);
        }
    }

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
