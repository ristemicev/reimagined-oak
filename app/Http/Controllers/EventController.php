<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;

class EventController extends Controller
{
    public function show(EventRepository $eventRepository, $slug)
    {
        $event = $eventRepository->published()->get()->where('slug', $slug)->first();
        return view('components.single_event', compact('event'));
    }
}
