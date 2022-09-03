<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $eventController = new EventController();
        $events = $eventController->index();
        $suscriptions = [];
        if (Auth::check()) {
            $suscriptions = $eventController->getSuscriptions();
        }
        return view('home', compact('events', 'suscriptions'));
    }


    public function old()
    {
        $eventController = new EventController();
        $events = $eventController->index();

        $suscriptions = [];
        return view('pastEvents', compact('events', 'suscriptions'));
    }

    public function show($id)
    {
        $eventController = new EventController();
        $event = $eventController->show($id);
        $suscriptions = [];
        if (Auth::check()) {
            $suscriptions = $eventController->getSuscriptions();
        }
        return view('detail', compact('event', 'suscriptions'));
    }

    public function suscribe($id)
    {
        $suscribed = false;
        $eventController = new EventController();
        $suscriptions = $eventController->getSuscriptions();

        foreach ($suscriptions as $suscription) {
            if ($suscription->id == $id) {
                $suscribed = true;
            }
        }

        if (!$suscribed) {
            $events = $eventController->suscribe($id);
        }


        return \redirect()->back();
    }

    public function unsuscribe($id)
    {
        $eventController = new EventController();
        $events = $eventController->unsuscribe($id);
        return \redirect()->back();
    }

    public function getSuscriptions()
    {
        $eventController = new EventController();
        $events = $eventController->getSuscriptions();

        return \view('myEvents', \compact('events'));
    }
}