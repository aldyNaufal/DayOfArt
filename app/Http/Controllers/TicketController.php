<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    //
    public function create(Event $event){
        $userId = Auth::user()->id;
        $eventId = $event->id;

        Ticket::create([
            'idUser' => $userId,
            'idEvent' => $eventId
        ]);
        return view('web.details.detail', ['event' => $event]);
    }
    public function myTicket(){
        $userId = Auth::user()->id;
        $query = Ticket::query();
        $query->where('idUser',$userId);

        $tickets = $query->get();
        $pair = array();
        foreach($tickets as $ticket){
            $q = Event::query();
            $q->where('id',$ticket->idEvent);
            $event = $q->get();
            $event = $event[0];
            $temp = [
                'idTicket'=>$ticket->id,
                'event'=>$event->name
            ];
            array_push($pair,$temp);
        }

        return view('profileMyTicket',['pair' => $pair]);
    }
}
