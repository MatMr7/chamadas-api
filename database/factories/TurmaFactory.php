<?php

namespace Database\Factories;

use App\Models\Disciplina;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Turma>
 */
class TurmaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::query()->create([
            'name' => 'Professor',
            'cpf' => 'doasjdasio',
            'password' => 123,
            'user_type_id' => UserType::PROFESSOR
        ]);

        $disciplina = Disciplina::query()->create([
            'codigo' => 1
        ]);

        return [
            'nome' => 'Turma 1',
            'professor_id' => $user->id,
            'disciplina_id' => $disciplina->id
        ];
    }
}
