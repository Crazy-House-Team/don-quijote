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
        $events = $eventController->index();
        return view('admin',compact('events'));
    }

    public function destroy($id) {
        $eventController = new EventController();
        $events = $eventController->destroy($id);
        return view('admin');
    }

    public function create() {
        return view('newEvent');
    }

    public function store(Request $request) {
        $eventController = new EventController();
        $events = $eventController->store($request);
        return redirect()->route('admin');
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit($id)
    { 
        $event = Event::find($id);
        return view('editEvent',compact('event'));

    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(Request $request, $id)
    {
        $event = request()->except(['_token','_method']);
        //echo('<pre>');
        //var_dump($event);
        //echo('</pre>');
        Event::where('id','=',$id)->update($event);
        return redirect()->route('admin');
    }


}
