<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('layouts._partials.topo')
    <div class="w-full">
        <div class="bg-gradient-to-b from-blue-800 to-blue-600 h-96"></div>
        <div class="max-w-6xl mx-auto px-6 sm:px-6 lg:px-8 mb-12">
            <div class="bg-white w-full shadow rounded p-8 sm:p-12 -mt-72" style="width: 1076px">
                <p class="text-3xl font-bold leading-7 text-center">Visualizar Tickets</p>
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{route('dashboard')}}" method="GET">
                    @csrf

                    @include('components.view-ticket')

                    <div class="flex items-center justify-center w-full">

                        <button type="submit" name="" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none">
                            Voltar
                        </button>
                        <form action="{{route('ticket.destroy',$ticket->id)}}" method="POST">
                            @csrf
                            <button type="submit" name="" class="mt-9 font-semibold leading-none text-white py-4 px-10 bg-blue-700 rounded hover:bg-blue-600 focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 focus:outline-none ml-5">
                                Deletar
                            </button>
                        </form>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>
</html>