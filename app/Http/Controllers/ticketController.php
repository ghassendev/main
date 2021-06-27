<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Ticket;
use Illuminate\Http\Request;

class ticketController extends Controller
{
    public function handleTicket(Request $request){
        $ticket = new Ticket;
        $ticket->choice=$request->choice;
        $ticket->number=$request->mise;
        $ticket->maxwin=$request->maxwin;
        $ticket->user_id=$request->id;
        $ticket->statut=0;
        $ticket->save();
       

        $id=$request->id;
      
        $client=Client::where('id', $id)->first();

        //dd($client);
        $client->solde -= $request->mise;
        $client->save();
        return redirect()->back();

    }
    public function verifyTicket(){
        
    }
}
