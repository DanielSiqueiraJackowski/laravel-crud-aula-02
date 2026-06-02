@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Cadastrar Matrícula',
        'rota' => '',
    ]
)
@section('conteudo')

    <form action="{{ route('matricula.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Aluno</label>
            <select name="aluno_id" class="form-select">
                <option value="">-- Selecione --</option>
                @foreach($alunos as $a)
                    <option value="{{ $a->id }}">{{ $a->nome }}</option>
                @endforeach
            </select>
            @error('aluno_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Disciplina</label>
            <select name="disciplina_id" class="form-select">
                <option value="">-- Selecione --</option>
                @foreach($disciplinas as $d)
                    <option value="{{ $d->id }}">{{ $d->nome }}</option>
                @endforeach
            </select>
            @error('disciplina_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-secondary">Salvar</button>
    </form>

@endsection
