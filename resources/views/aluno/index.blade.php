@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Lista de Alunos',
        'rota' => 'aluno.create',
    ]
)
@section('conteudo')

    <table class="table align-middle caption-top table-striped">
        <thead>
            <th class="text-secondary">NOME</th>
            <th class="d-none d-md-table-cell text-secondary">TURMA</th>
            <th class="d-none d-md-table-cell text-secondary">CURSO</th>
            <th class="text-secondary">AÇÕES</th>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td class="d-none d-md-table-cell">{{ $item->turma }}</td>
                    <td class="d-none d-md-table-cell">{{ optional($item->curso)->nome }}</td>
                    <td>
                        <a href="{{route('aluno.show', $item->id)}}" class="btn btn-outline-info">Info</a>
                        <a href="{{route('aluno.edit', $item->id)}}" class="btn btn-outline-success">Editar</a>
                        <form action="{{route('aluno.destroy', $item->id)}}" method="POST" style="display:inline">
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
