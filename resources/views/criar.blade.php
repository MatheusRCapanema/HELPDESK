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
    <h1>Criar tickets </h1>
    <div>
    <form action="{{route('ticket.store')}}" method= "post">
    @csrf
    <input type="text" name="Assunto" id="Assunto" placeholder="Assunto">
    Prioridade
    <select name="fk_Prioridade" id= "fk_Prioridade">
        <option value="1">Baixa</option>
        <option value="2">Media</option>
        <option value="3">Alta</option>
        <option value="4">Urgente</option>
      </select>
    <input type="text" name="Assunto" id="Assunto" placeholder="Assunto">
    <textarea name="Problema" id="Problema" cols="30" rows="4" placeholder="Conteúdo"></textarea>
    <button type="submit" name="">Enviar</button>
    </form>
    </div>
</body>
</html>
