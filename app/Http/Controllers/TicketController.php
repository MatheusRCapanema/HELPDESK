<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 

class TicketController extends Controller
{
    public function visualizarTickets()
    {
        $ticket = Ticket::get();


        return view('visualizar', compact('ticket'));
    }

    public function criarTickets()
    {

        return view('criar');
    }

    public function armazenarTickets(Request $request)
    {
           $ticketData =  $request->all();
           $ticketData['fk_Usu_Solicitante'] = $request->user()->id;
           $ticketData['fk_status'] = 4;

           Ticket::create($ticketData);

            return redirect()->route('ticket.list');
        
    }


}
