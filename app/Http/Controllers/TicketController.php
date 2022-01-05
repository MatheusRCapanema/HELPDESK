<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function visualizarTickets(){
        $ticket = Ticket::get();
       

        return view('visualizar', compact('ticket'));
    }
    
}
