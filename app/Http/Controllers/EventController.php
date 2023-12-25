<?php

namespace App\Http\Controllers;

use App\Repositories\EventRepository;

class EventController extends Controller
{
    public function index(EventRepository $eventRepository)
    {
        $events = $eventRepository->published()->get();
        return view('pages.news.events', compact('events'));
    }

    public function show(EventRepository $eventRepository, $id)
    {
        $event = $eventRepository->published()->get()->where('id', $id)->first();
        return view('pages.news.single_event', compact('event'));
    }
}
