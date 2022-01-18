<div class="overflow-x-auto">
    <div class="min-w-screen min-h-0 flex items-center justify-center font-sans overflow-hidden">
        <div class="w-full lg:w-6/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-center">Ticket</th>
                        <th class="py-3 px-6 text-center">Assunto</th>
                        <th class="py-3 px-6 text-center">Prioridade</th>
                        <th class="py-3 px-6 text-center">Status</th>
                        <th class="py-3 px-6 text-center">Solicitante</th>
                        <th class="py-3 px-6 text-center">Área</th>
                        <th class="py-3 px-6 text-center">Actions</th>
                    </tr>
                    </thead>

                    @foreach($ticket as $ticketn)
                        <tbody class="text-gray-600 text-sm font-light">
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-rigth whitespace-nowrap"> <!-- Ticket id -->
                                <div class="text-center">
                                    <div class="mr-2">
                                        <p>{{$ticketn->id}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left"> <!-- Assunto -->
                                <div class="text-center">
                                    <div class="mr-2">
                                        <p>{{$ticketn->Assunto}}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left"> <!-- Prioridade -->
                                <div class="text-center">
                                    <div class="mr-2">
                                        @switch($ticketn->fk_Prioridade)
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
                                <div class="text-center">
                                    <div class="mr-2">
                                        @switch($ticketn->fk_status)
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
                                <div class="text-center">
                                    <div class="mr-2">
                                        <p>{{$ticketn->user->name}}</p>

                                    </div>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-left"> <!-- área -->
                                <div class="text-center">
                                    <div class="mr-2">
                                        <p>{{$ticketn->area->Nome_area}}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="py-3 px-6 text-center"> <!-- actions -->

                                <div class="flex item-center justify-center">
                                    <a href="{{ url('/visualizar/ticket/'.$ticketn->id) }}" >
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </div>
                                <div>
                                    <a href="{{ route('ticket.edit', $ticketn->id) }}" >
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>

                                </div>
                                <div>
                                    @if(auth()->user()->fk_Perfil == 1 )
                                    <a href="{{ route('ticket.destroy',$ticketn->id) }}" >
                                    <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                    @endif
                                </div>                              
                        </div>
                    </td>
            </tr>
            </tbody>
            @endforeach
        </table>


        </div>
    </div>
</div>
