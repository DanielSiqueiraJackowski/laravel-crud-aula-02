<div>
    <h1>Novo Curso</h1>
    <form action="{{route('curso.store')}}" method="POST">
        @csrf
        <input type="text" name="nome" placeholder="Nome do Curso" />
        <input type="number" name="duracao" placeholder="Duração do Curso" />
        <input type="submit" value="Salvar">
        <a href="{{route('curso.index')}}">Voltar</a>
    </form>
</div>
