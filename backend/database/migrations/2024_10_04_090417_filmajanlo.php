<?php

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
        Schema::create('felhasznalok', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nev', 255);
            $table->string('email', 255)->unique();
            $table->string('jelszo',255);
            $table->string('profil_kep',255)->nullable();
            $table->timestamps('regisztracios_datum');
        });

        Schema::create('kategoriak', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nev', 255);
        });

        Schema::create('studio', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nev', 255);
        });

        Schema::create('szinesz', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nev', 255);
            $table->text('ismerteto');
            $table->date('szuldatum');
        });

        Schema::create('iro', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nev', 255);
            $table->text('ismerteto');
            $table->date('szuldatum');
        });

        Schema::create('rendezo', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nev', 255);
            $table->text('ismerteto');
            $table->date('szuldatum');
        });

        Schema::create('filmek', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('cim', 255);
            $table->text('leiras');
            $table->year('kiadasi_ev');
            $table->string('boritokep_url', 255);
            $table->string('link_netflix', 255);
            $table->string('link_hbo', 255);
            $table->foreignId('rendezo_id')->constrained('rendezo');
            $table->foreignId('iro_id')->constrained('iro');
            $table->foreignId('kategoriak_id')->constrained('kategoriak');
            $table->foreignId('studio_id')->constrained('studio');
        });

        Schema::create('sorozatok', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('cim', 255);
            $table->text('leiras');
            $table->year('kiadasi_ev');
            $table->string('boritokep_url', 255);
            $table->string('link_netflix', 255);
            $table->string('link_hbo', 255);
            $table->foreignId('rendezo_id')->constrained('rendezo');
            $table->foreignId('iro_id')->constrained('iro');
            $table->foreignId('kategoriak_id')->constrained('kategoriak');
            $table->foreignId('studio_id')->constrained('studio');
        });

        Schema::create('velemeny', function (Blueprint $table) {
            $table->id()->primary();
            $table->text('velemeny');
            $table->timestamp('datum');
            $table->foreignId('felhasznalo_id')->constrained('felhasznalok');
            $table->foreignId('mu_id')->constrained('filmek')->constrained('sorozatok');
        });

        Schema::create('film_szinesz', function (Blueprint $table) {
            $table->id('film_id');
            $table->id('szinesz_id');
            $table->primary(['film_id', 'szinesz_id']);
            $table->foreignId('film_id')->constrained('filmek');
            $table->foreignId('szinesz_id')->constrained('szinesz');
        });

        Schema::create('sorozat_szinesz', function (Blueprint $table) {
            $table->id('sorozat_id');
            $table->id('szinesz_id');
            $table->primary(['sorozat_id', 'szinesz_id']);
            $table->foreignId('sorozat_id')->constrained('sorozatok');
            $table->foreignId('szinesz_id')->constrained('szinesz');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('felhasznalok');
        Schema::dropIfExists('kategoriak');
        Schema::dropIfExists('studio');
        Schema::dropIfExists('szinesz');
        Schema::dropIfExists('iro');
        Schema::dropIfExists('rendezo');
        Schema::dropIfExists('filmek');
        Schema::dropIfExists('sorozatok');
        Schema::dropIfExists('velemeny');
        Schema::dropIfExists('film_szinesz');
        Schema::dropIfExists('sorozat_szinesz');
    }
};
