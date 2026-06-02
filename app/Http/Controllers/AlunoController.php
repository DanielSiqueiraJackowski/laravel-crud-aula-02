<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Curso;
use App\Http\Requests\AlunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Aluno::with('curso')->get();
        return view('aluno.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cursos = Curso::all();
        return view('aluno.create', compact('cursos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlunoRequest $request)
    {
        Aluno::create($request->validated());
        return redirect()->route('aluno.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $item = Aluno::with('curso','disciplina')->findOrFail($id);
        return view('aluno.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Aluno::findOrFail($id);
        $cursos = Curso::all();
        return view('aluno.edit', compact('item','cursos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AlunoRequest $request, string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->validated());
        return redirect()->route('aluno.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('aluno.index');
    }
}
