                                          
<div class="overflow-x-auto">
    <div class="min-w-screen min-h-0 flex items-center justify-center font-sans overflow-hidden">
        <div class="w-full lg:w-6/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Ticket</th>
                            <th class="py-3 px-6 text-left">Assunto</th>
                            <th class="py-3 px-6 text-center">Problema</th>
                            <th class="py-3 px-6 text-center">Prioridade</th>
                            <th class="py-3 px-6 text-center">Status</th>
                            <th class="py-3 px-6 text-center">Solicitante</th>
                            <th class="py-3 px-6 text-center">Área</th>
                           
                        </tr>
                    </thead>

                        <tbody class="text-gray-600 text-sm font-light">
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap"> <!-- Ticket id -->
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <p>{{$ticket->id}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left"> <!-- Assunto -->
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <p>{{$ticket->Assunto}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left"> <!-- área -->
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <p>{{$ticket->Problema}}</p>
                                        </div>
                                    </div>
                                </td>  
                                <td class="py-3 px-6 text-left"> <!-- Prioridade -->
                                    <div class="flex items-center">
                                        <div class="mr-2">                                       
                                            @switch($ticket->fk_Prioridade)
                                                @case('1')                                                   
                                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Baixa</span>     
                                                @break
                                                @case('2')    
                                                        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Média</span>                    
                                                @break
                                                @case('3')
                                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Alta</span>   
                                                @break
                                                @case('4')
                                                        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Urgente</span>
                                                @break
                                                
                                                @default
                                                
                                            @endSwitch
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left"> <!-- Status -->
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            @switch($ticket->fk_status)
                                                @case('1')
                                                        <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Em Análise</span>
                                                @break
                                                @case('2')
                                                        <span class="bg-blue-200 text-blue-600 py-1 px-3 rounded-full text-xs">Negociação</span>
                                                @break
                                                @case('3')
                                                        <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Complementação</span>
                                                @break
                                                @case('4')
                                                        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Inicializado</span>
                                                @break
                                                @case('5')
                                                        <span class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Concluído</span>
                                                @break
                                                @default
                                                
                                            @endSwitch

                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left"> <!-- Solicitante -->
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <p>{{$ticket->user->name}}</p>
                                            
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left"> <!-- área -->
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            <p>{{$ticket->area->Nome_area}}</p>
                                        </div>
                                    </div>
                                </td>          
                            </tr> 
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
