<hr>

<h1>Problema</h1>
<div>
  <span>{{$ticket->Problema}}</span>
</div>
<h1>Comentários</h1>

<form action="{{route('comment.store')}}" method="Post" >
  @csrf
  <input type="hidden" name="fk_ticket" value="{{$ticket->id}}">
  <input type="hidden" name="fk_usuario" value="{{auth()->user()->id}}">
  
    <div class="form-group">
      <textarea name="Mensagem" id="Mensagem" cols="30" rows="7" placeholder="Insira seu comentário" class="form-control"></textarea>
    </div>
    <div class="form-group">
      <button type="submit">Enviar</button>
    </div>

    
</form>