<div>
   <h1>Alterar Curso</h1>
    <form action="{{route('curso.update', $curso->id)}}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nome" placeholder="Nome do Curso" value="{{$curso->nome}}" />
        <input type="number" name="duracao" placeholder="Duração do Curso" value="{{$curso->duracao}}" />
        <input type="submit" value="Salvar">
        <a href="{{route('curso.index')}}">Voltar</a>
    </form>
</div>
