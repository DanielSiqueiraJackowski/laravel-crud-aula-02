@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Detalhes do Aluno',
        'rota' => '',
    ]
)
@section('conteudo')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $item->nome }}</h5>
            <p class="card-text"><strong>Turma:</strong> {{ $item->turma }}</p>
            <p class="card-text"><strong>Curso:</strong> {{ optional($item->curso)->nome }}</p>
        </div>
    </div>

@endsection
