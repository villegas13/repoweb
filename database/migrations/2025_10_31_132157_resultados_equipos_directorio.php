<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatsColumnsToEquiposTable extends Migration
{
    public function up()
    {
        Schema::table('equipos', function (Blueprint $table) {
            if (! Schema::hasColumn('equipos', 'partidos_jugados')) {
                $table->unsignedInteger('partidos_jugados')->default(0);
                $table->unsignedInteger('juegos_ganados')->default(0);
                $table->unsignedInteger('juegos_perdidos')->default(0);
                $table->unsignedInteger('juegos_empatados')->default(0);
                $table->unsignedInteger('goles_favor')->default(0);
                $table->unsignedInteger('goles_contra')->default(0);
                $table->integer('diferencia_goles')->default(0);
                $table->unsignedInteger('puntos')->default(0);
                $table->unsignedInteger('posicion')->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('equipos', function (Blueprint $table) {
            $table->dropColumn([
                'partidos_jugados',
                'juegos_ganados',
                'juegos_perdidos',
                'juegos_empatados',
                'goles_favor',
                'goles_contra',
                'diferencia_goles',
                'puntos',
                'posicion',
            ]);
        });
    }
}
