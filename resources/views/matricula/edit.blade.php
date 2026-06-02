@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Editar Matrícula',
        'rota' => '',
    ]
)
@section('conteudo')

    <form action="{{ route('matricula.update', [$item->disciplina_id, $item->aluno_id]) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Aluno</label>
            <select name="aluno_id" class="form-select">
                <option value="">-- Selecione --</option>
                @foreach($alunos as $a)
                    <option value="{{ $a->id }}" @if(old('aluno_id', $item->aluno_id) == $a->id) selected @endif>{{ $a->nome }}</option>
                @endforeach
            </select>
            @error('aluno_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Disciplina</label>
            <select name="disciplina_id" class="form-select">
                <option value="">-- Selecione --</option>
                @foreach($disciplinas as $d)
                    <option value="{{ $d->id }}" @if(old('disciplina_id', $item->disciplina_id) == $d->id) selected @endif>{{ $d->nome }}</option>
                @endforeach
            </select>
            @error('disciplina_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-secondary">Atualizar</button>
    </form>

@endsection
