<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProfessorRequest;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProfessorController extends Controller
{
    public function create(CreateProfessorRequest $request): JsonResponse
    {
        $professor = new User();
        $professor->name = $request->input('name');
        $professor->cpf = $request->input('cpf');
        $professor->password = bcrypt($request->input('password'));
        $professor->user_type_id = UserType::PROFESSOR;
        $professor->save();

        return new JsonResponse($professor);
    }
}
