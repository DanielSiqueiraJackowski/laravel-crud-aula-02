<div>
    <h1>Informações Adicionais do Curso</h1>
    <h3>ID: {{ $curso->id }}</h3>
    <h3>Nome: {{ $curso->nome }}</h3>
    <h3>Duração: {{ $curso->duracao }}</h3>
    <a href="{{route('curso.index')}}">Voltar</a>
</div>
