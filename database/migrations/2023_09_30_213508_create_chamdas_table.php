<?php

use App\Models\Professor;
use App\Models\Turma;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chamadas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Professor::class);
            $table->foreignIdFor(Turma::class);
            $table->dateTime('data_abertura');
            $table->dateTime('data_termino');
            $table->string('latitude1');
            $table->string('latitude2');
            $table->string('longitude1');
            $table->string('longitude2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chamdas');
    }
};
