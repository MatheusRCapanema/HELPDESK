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
    public function visualizarTicketsDel()
    {
        $ticket = Ticket::get();
        return view('deletar', compact('ticket'));
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

        return redirect()->route('ticket.list')->with('message', 'Ticket criado com sucesso!');
    }

    public function editarTickets($id)
    {

        if(!$ticket = Ticket::find($id)){

            return redirect()->back();
        }
        return view('editar',compact('ticket'));
    }
    public function update($id, Request $request){
        if(!$ticket = Ticket::find($id)){

            return redirect()->back();
        }
        $this->validate($request,[
            'Assunto'=>'required',
            'Problema'=>'required'
        ]);
        $ticket->update($request->all());


        return redirect()->route('ticket.list')->with('message', 'Ticket editado com sucesso!');
    }
    public function destroy($id){
        $ticket=Ticket::findOrFail($id);
        $ticket->delete();
        return redirect('resources/views/visualizar')->with('Sucesso','Ticket Removido');
    }

}
