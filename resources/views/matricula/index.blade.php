@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Lista de Matrículas',
        'rota' => 'matricula.create',
    ]
)
@section('conteudo')

    <table class="table align-middle caption-top table-striped">
        <thead>
            <th class="text-secondary">ALUNO</th>
            <th class="text-secondary">DISCIPLINA</th>
            <th class="text-secondary">AÇÕES</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ optional($item->aluno)->nome }}</td>
                    <td>{{ optional($item->disciplina)->nome }}</td>
                    <td>
                        <a href="{{route('matricula.show', [$item->disciplina_id, $item->aluno_id])}}" class="btn btn-outline-info">Info</a>
                        <a href="{{route('matricula.edit', [$item->disciplina_id, $item->aluno_id])}}" class="btn btn-outline-success">Editar</a>
                        <form action="{{route('matricula.destroy', [$item->disciplina_id, $item->aluno_id])}}" method="POST" style="display:inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Remover</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
