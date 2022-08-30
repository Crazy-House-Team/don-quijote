<?php

namespace App\Http\Controllers;

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
}
