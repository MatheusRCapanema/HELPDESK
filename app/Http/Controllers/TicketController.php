<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index(){
        $ticket = Ticket::get();
     
        return view('tickets', compact('ticket'));
    }

    public function create(){
        return view('createTicket');
    }
    
}
