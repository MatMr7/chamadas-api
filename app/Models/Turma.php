<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $professor_id
 * @property string $nome
 * @property int $disciplina_id
 */
class Turma extends Model
{
    use HasFactory;
}
