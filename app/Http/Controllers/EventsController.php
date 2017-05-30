<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use App\Http\Requests\CreateEventsRequest;

class EventsController extends Controller
{
  public function listEvents() {

    $events = Event::all();

    return view('events.index', [
      'events' => $events,
    ]);
}

 public function create(CreateEventsRequest $request)
    {
      $events = Event::create([
          'name' => $request->input('name'),
          'init_date' => $request->input('init_date'),
          'final_date' => $request->input('final_date'),
          'place' => $request->input('place'),
          'resource' => $request->input('resource'),
          'event_type' => $request->input('event_type'),
          'projects_id' => $request -> input('projects_id'),

      ]);
       return redirect('/events');
    }

    public function newEvent()
    {
      return view('events.new', []);
    }
     public function show(Event $event)
    {
      return view('events.show', [
        'event' => $event,
      ]);
    }
}