<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function handleTicket(Request $request){
        $ticket = new Ticket;
        $ticket->choice=$request->choice;
        $ticket->number=$request->mise;
        $ticket->maxwin=$request->maxwin;
        $ticket->save();
        return redirect()->back();
    }
}
