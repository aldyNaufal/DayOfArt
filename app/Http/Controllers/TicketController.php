<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    //

    public function myTicket(){
        $userId = Auth::user()->id;
        $query = Ticket::query();
        $query->where('idUser',$userId);

        $tickets = $query->get();
        return view('profileMyTicket',['tickets' => $tickets]);
    }
}
