<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Disciplina;
use App\Http\Requests\MatriculaRequest;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Matricula::with('aluno','disciplina')->get();
        return view('matricula.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alunos = Aluno::all();
        $disciplinas = Disciplina::all();
        return view('matricula.create', compact('alunos','disciplinas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MatriculaRequest $request)
    {
        Matricula::create($request->validated());
        return redirect()->route('matricula.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $disciplina, string $aluno)
    {
        $item = Matricula::with('aluno','disciplina')
            ->where('disciplina_id', $disciplina)
            ->where('aluno_id', $aluno)
            ->firstOrFail();

        return view('matricula.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $disciplina, string $aluno)
    {
        $item = Matricula::where('disciplina_id', $disciplina)
            ->where('aluno_id', $aluno)
            ->firstOrFail();

        $alunos = Aluno::all();
        $disciplinas = Disciplina::all();
        return view('matricula.edit', compact('item','alunos','disciplinas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MatriculaRequest $request, string $disciplina, string $aluno)
    {
        $m = Matricula::where('disciplina_id', $disciplina)
            ->where('aluno_id', $aluno)
            ->firstOrFail();

        $m->update($request->validated());
        return redirect()->route('matricula.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $disciplina, string $aluno)
    {
        $m = Matricula::where('disciplina_id', $disciplina)
            ->where('aluno_id', $aluno)
            ->firstOrFail();

        $m->delete();
        return redirect()->route('matricula.index');
    }
}
