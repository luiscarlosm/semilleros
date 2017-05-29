<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
  public function listEvents() {

    $events = Event::all();

    return view('events.index', [
      'events' => $events,
    ]);
  //
}
}
