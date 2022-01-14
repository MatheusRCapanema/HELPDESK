
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Ticket</title>
</head>
<body>
@include('layouts._partials.topo')
<div class="w-full">
    <div class="bg-gradient-to-b from-blue-800 to-blue-600 h-96"></div>
    <div class="max-w-5xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
        <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72">
            <p class="text-3xl font-bold leading-7 text-center">Editar Ticket</p>

            <form action="{{route('ticket.update')}}" method="post">
                @csrf
                <div class="md:flex items-center mt-12">
                    <div class="w-full md:w-1/2 flex flex-col">
                        <label class="font-semibold leading-none">Assunto</label>
                        <input type="text" name="Assunto" id="Assunto" placeholder="Assunto" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200" value="{{$ticket.assunto}}" />
                    </div>
                    <div class="w-full md:w-1/2 flex flex-col md:ml-6 md:mt-0 mt-4">
                        <label class="font-semibold leading-none">Prioridade</label>
                        <select name="fk_Prioridade" id= "fk_Prioridade" class="leading-none text-gray-900 p-3 focus:outline-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200">
                            <option value="1">Baixa</option>
                            <option value="2">Media</option>
                            <option value="3">Alta</option>
                            <option value="4">Urgente</option>
                        </select>
                    </div>
                </div>
                <div>
                    <div class="w-full flex flex-col mt-8">
                        <label class="font-semibold leading-none">Problema</label>
                        <textarea name="Problema" id="Problema" cols="30" rows="4" placeholder="Conteúdo" type="text" class="h-40 text-base leading-none text-gray-900 p-3 focus:oultine-none focus:border-blue-700 mt-4 bg-gray-100 border rounded border-gray-200">{{$ticket->problema}}</textarea>
                    </div>
                </div>
                <div class="flex items-center justify-center w-full">
                    <button type="submit" name="" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none" value="Update Ticket">
                        Editar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
