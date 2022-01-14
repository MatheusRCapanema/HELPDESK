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

    public function visualizarActionTickets($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('visual-action', compact('ticket') );
    }


    public function criarTickets()
    {
        return view('criar');
    }



    public function armazenarTickets(Request $request)
    {
        $ticketData =  $request->all();
        $ticketData['fk_Usu_Solicitante'] = $request->user()->id;
        $ticketData['fk_Area_Atendente']= $request->user()->fk_Area;
        $ticketData['fk_status'] = 4;

        Ticket::create($ticketData);

        return redirect()->route('ticket.list');
    }

    public function editarTickets($id)
    {
        $ticket = Ticket::findOrFail($id);
        return view('ticket.editar',['ticket'=>$ticket]);
    }
    public function update($id, Request $request){
        $this->validate($request,[
            'Assunto'=>'required',
            'Problema'=>'required'
        ]);
        $ticketData=$request->all();
        Ticket::findOrFail($id)->update($ticketData);
        Session::flash('success','Ticket atualizado com sucesso');
        return redirect()-route('ticket.list');
    }


}
