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

        return view('home', compact('events'));
    }

    public static function checkUser($event) {
        $userExists = false;
        foreach ($event->users as $user) {
            if(Auth::id() == $user->id) {
                $userExists = true;
            }
        }

        return $userExists;
    }
}
