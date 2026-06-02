@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Detalhes da Matrícula',
        'rota' => '',
    ]
)
@section('conteudo')

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Aluno: {{ optional($item->aluno)->nome }}</h5>
            <p class="card-text"><strong>Disciplina:</strong> {{ optional($item->disciplina)->nome }}</p>
        </div>
    </div>

@endsection
