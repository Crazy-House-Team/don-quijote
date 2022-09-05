<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = Event::select()
        ->where('date', '>', \now())
        ->withCount('users')
        ->orderBy('date', 'asc')
        ->get();
        return $events;
    }

    public function indexOld()
    {
        //
        $events = Event::select()->where('date','<=',\now())
            ->withCount('users')
            ->orderBy('date','desc')
            ->simplePaginate(6);

        return $events;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = request()->except("_token");

        if ($request->favorite == 'on') {
            $favorite = true;
        } else {
            $favorite = false;
        }

        $event = Event::create([
            'title' => $request->title,
            'resume' => $request->resume,
            'description' => $request->description,
            'place' => $request->place,
            'address' => $request->address,
            'date' => date('Y-m-d', strtotime($request->date)),
            'time' => date('H:i:s', strtotime($request->time)),
            'img' => $request->img,
            'max_participants' => intval($request->max_participants),
            'favorite' => $favorite
        ]);

        // return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::select()
            ->where('id', $id)
            ->withCount('users')
            ->get();

        return $event[0];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
    }

    public function suscribe($id)
    {
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->events()->attach($event);
    }

    public function unsuscribe($id)
    {
        $user = User::find(Auth::id());
        $event = Event::find($id);

        $user->events()->detach($event);
    }

    public function getSuscriptions($user)
    {
        $events = $user->events;
        return $events;
    }
}
