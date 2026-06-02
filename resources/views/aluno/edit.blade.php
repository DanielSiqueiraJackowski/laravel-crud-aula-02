@extends('template/main',
    [
        'titulo'=>"Sistema Aula",
        'cabecalho' => 'Editar Aluno',
        'rota' => '',
    ]
)
@section('conteudo')

    <form action="{{ route('aluno.update', $item->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ old('nome', $item->nome) }}">
            @error('nome') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Turma</label>
            <input type="text" name="turma" class="form-control" value="{{ old('turma', $item->turma) }}">
            @error('turma') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Curso</label>
            <select name="curso_id" class="form-select">
                <option value="">-- Selecione --</option>
                @foreach($cursos as $c)
                    <option value="{{ $c->id }}" @if(old('curso_id', $item->curso_id) == $c->id) selected @endif>{{ $c->nome }}</option>
                @endforeach
            </select>
            @error('curso_id') <div class="text-danger">{{ $message }}</div> @enderror
        </div>
        <button class="btn btn-secondary">Atualizar</button>
    </form>

@endsection
