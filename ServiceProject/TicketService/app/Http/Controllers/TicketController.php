<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Ticket;

class ExampleController extends Controller
{
    public function index()
    {
        $ticket = Ticket::all();

        return response()->json($ticket);
    }

    public function store(Request $request)
    {

        $ticket = new Ticket();

        $ticket->EventID = $request->input('EventID');
        $ticket->TicketAvailable = $request->input('TicketAvailable');
        $ticket->TicketType = $request->input('TicketType');
        $ticket->TicketPrice = $request->input('TicketPrice');

        $ticket->save();
        return response()->json($ticket);
    }
}
