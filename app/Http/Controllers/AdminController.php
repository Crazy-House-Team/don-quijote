<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $eventController = new EventController();
        $currentEvents = $eventController->index();
        $oldEvents = $eventController->indexOld();
        return view('admin',compact('currentEvents','oldEvents'));
    }

    public function destroy($id) {
        $eventController = new EventController();
        $events = $eventController->destroy($id);
        return \redirect()->back();
    }

    public function create() {
        return view('newEvent');
    }

    public function store(Request $request) {
        $eventController = new EventController();
        $events = $eventController->store($request);
        return redirect()->route('admin');
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('editEvent',compact('event'));

    }

    public function update(Request $request, $id)
    {
        $event = request()->except(['_token','_method']);

        if ($request->favorite == 'on') {
            $favorite = true;
        } else {
            $favorite = false;
        }

        $event = ([
            'title' => $request->title,
            'resume' => $request->resume,
            'description' => $request->description,
            'place' => $request->place,
            'address' => $request->address,
            'date' => date('Y-m-d', strtotime($request->date)),
            'time' => date('H:i:s', strtotime($request->time)),
            'img' => $request->img,
            'max_participants' => intval($request->max_participants),
            'favorite' => $favorite]);

            Event::where('id','=',$id)->update($event);
            return redirect()->route('admin');

    }


}
