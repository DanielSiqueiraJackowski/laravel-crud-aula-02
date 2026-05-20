<div>
    <h1>Cursos Cadastrados</h1>
    <a href="{{route('curso.create')}}">Novo Curso</a>

    <table style="width: 100%">
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DURAÇÃO</th>
            <th>AÇÕES</th>
        </thead>
        <tbody>
            @foreach ($data as $curso)
                <tr>
                    <td style="text-align: center;">{{ $curso->id }}</td>
                    <td style="text-align: center;">{{ $curso->nome }}</td>
                    <td style="text-align: center;">{{ $curso->duracao }}</td>
                    <td style="text-align: center;">
                        <a href="{{route('curso.show', $curso->id)}}">Mais Info</a>
                        <a href="{{route('curso.edit', $curso->id)}}">Editar</a>
                        <form action="{{route('curso.destroy', $curso->id)}}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>    
            @endforeach
        </tbody>
        
    </table>
</div>
