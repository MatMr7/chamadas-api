<?php

namespace App\Http\Controllers\Web\Professor;

use App\Http\Controllers\Controller;
use App\Models\AlunoChamada;
use App\Models\Chamada;
use App\Models\Turma;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function create()
    {
         $turmas = Turma::query()->get();
         $alunos = User::query()->where('user_type_id', UserType::ALUNO)->get();
         return view('professor.chamada.create', compact('turmas', 'alunos'));
    }

    public function index()
    {
        $chamadas = Chamada::query()->with('turma')->get();
        return view('professor.chamada.index', compact('chamadas'));
    }

    public function show($chamadaId)
    {
        $chamada = Chamada::query()->findOrFail($chamadaId);
        $aluno = AlunoChamada::query()->with('aluno')->where('chamada_id', $chamadaId)->first();
        return view('professor.chamada.show', compact('chamada', 'aluno'));


    }

    public function store(Request $request)
    {

        $chamada = new Chamada();
        $chamada->professor_id = request()->user()->id;
        $chamada->turma_id = $request->turma_id;
        $chamada->data_abertura = $request->data_abertura;
        $chamada->data_termino = $request->data_termino;
        $chamada->latitude = $request->latitude;
        $chamada->longitude = $request->longitude;
        $chamada->save();

        return redirect()->route('home')->with('success', 'Chamada created successfully!');
    }
}
