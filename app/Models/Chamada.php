<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $professor_id
 * @property int $turma_id
 * @property mixed $data_abertura
 * @property mixed $data_termino
 * @property mixed $latitude1
 * @property mixed $latitude2
 * @property mixed $longitude1
 * @property mixed $longitude2
 */
class Chamada extends Model
{
    use HasFactory;
}
