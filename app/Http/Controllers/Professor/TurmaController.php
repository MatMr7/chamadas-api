<?php

namespace App\Http\Controllers\Professor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Professor\CreateTurmaRequest;
use App\Models\Turma;
use Illuminate\Http\JsonResponse;

class TurmaController extends Controller
{
    public function create(CreateTurmaRequest $request): JsonResponse
    {
        $turma = new Turma();
        $turma->professor_id = request()->user()->id;
        $turma->nome = $request->input('nome');
        $turma->disciplina_id = $request->input('disciplina_id');
        $turma->save();

        return new JsonResponse($turma);
    }
}
