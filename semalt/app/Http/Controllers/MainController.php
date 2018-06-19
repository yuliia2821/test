<?php

namespace App\Http\Controllers;

use App\Bid;
use Illuminate\Http\Request;
use App\Event;

class MainController extends Controller
{

    public function createBids(Request $request)
    {
//dd($request, $request->all());
//        $bid = Bid::create($request->all());
        $bid = new Bid();
        $bid->id_event = $request->id_event;
        $bid->name = $request->name;
        $bid->email = $request->email;
        $bid->price = $request->price;
        $bid->save();

        return redirect()->back();
    }
    public function bids(){


       Event::firstOrCreate(['caption' => 'Atlas Weekend 2017']);
       Event::firstOrCreate(['caption' => 'Грин Грей (Green Grey)']);

        $events = Event::all();

        return view('form',[
            'events' => $events,
        ]);


    }
    public function result(){
        $maxBids = Bid::orderBy('price','desc')->first();
//        dump($maxBids);

        $nonEvents = Event::whereNotIn('id', function($query){
            $query->select('id_event')->from('bids');
        })->get();
//        dump($nonEvents);

        $events = Event::with('bids')->get();
        $events = $events->filter(function($event){
           return $event->bids->count() > 3;
        });
//        dump($events);

        $maxEvents = Event::with('bids')->get();
        $max= 0;
        $maxEvent = $maxEvents->first();
        foreach($maxEvents as $event)
        {
            if($event->bids->count() > $max)
            {
                $max = $event->bids->count();
                $maxEvent = $event;
            }
        }
        $data['maxBids'] = $maxBids;
        $data['withoutBids'] = $nonEvents;
        $data['bidsCount3'] = $events;
        $data['maxBidEvent'] = $maxEvent;
        return view('result', $data);

    }

}
