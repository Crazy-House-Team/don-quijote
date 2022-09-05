<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
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
        $user = User::find(Auth::id());

        $eventController = new EventController();
        $events = $eventController->index();
        $suscriptions = [];

        if (Auth::check()) {
            $suscriptions = $eventController->getSuscriptions($user);
        }

        return view('home', compact('events', 'suscriptions'));
    }


    public function old()
    {
        $eventController = new EventController();
        $events = $eventController->indexOld();
        $suscriptions = [];
        return view('pastEvents', compact('events', 'suscriptions'));
    }

    public function show($id)
    {
        $user = User::find(Auth::id());

        $eventController = new EventController();
        $event = $eventController->show($id);
        $suscriptions = [];
        if (Auth::check()) {
            $suscriptions = $eventController->getSuscriptions($user);
        }
        return view('detail', compact('event', 'suscriptions'));
    }

    public function suscribe($eventId)
    {
        $user = User::find(Auth::id());
        $event = Event::find($eventId);
        $suscribed = false;
        $eventController = new EventController();
        $suscriptions = $eventController->getSuscriptions($user);
        $availablePlaces = $this->getNumberOfAvailablePlaces($event->id);

        foreach ($suscriptions as $suscription) {
            if ($suscription->id == $eventId) {
                $suscribed = true;
            }
        }

        if (!$suscribed && $availablePlaces > 0) {
            $eventController->suscribe($eventId);
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
        $user = User::find(Auth::id());
        $eventController = new EventController();
        $events = $eventController->getSuscriptions($user);

        return \view('myEvents', \compact('events'));
    }

    private function getNumberOfAvailablePlaces($eventId)
    {
        $eventsArray = Event::select()
            ->where('id', $eventId)
            ->withCount('users')
            ->get();

        $event = $eventsArray[0];
        $availablePlaces = $event->max_participants - $event->users_count;

        return $availablePlaces;
    }
}
