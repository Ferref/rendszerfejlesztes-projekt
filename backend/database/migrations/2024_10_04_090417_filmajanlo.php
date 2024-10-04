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
            $table->id();
            $table->string('nev', 255);
            $table->string('email', 255)->unique();
            $table->string('jelszo', 255);
            $table->string('profil_kep', 255)->nullable();
            $table->timestamp('regisztracios_datum')->useCurrent();
        });

        Schema::create('kategoriak', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 255);
        });

        Schema::create('studio', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 255);
        });

        Schema::create('szinesz', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 255);
            $table->text('ismerteto');
            $table->date('szuldatum');
        });

        Schema::create('iro', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 255);
            $table->text('ismerteto');
            $table->date('szuldatum');
        });

        Schema::create('rendezo', function (Blueprint $table) {
            $table->id();
            $table->string('nev', 255);
            $table->text('ismerteto');
            $table->date('szuldatum');
        });

        Schema::create('filmek', function (Blueprint $table) {
            $table->id();
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
            $table->id();
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
            $table->id();
            $table->text('velemeny');
            $table->timestamp('datum');
            $table->foreignId('felhasznalo_id')->constrained('felhasznalok');
            $table->foreignId('film_id')->nullable()->constrained('filmek');
            $table->foreignId('sorozat_id')->nullable()->constrained('sorozatok');
        });

        Schema::create('film_szinesz', function (Blueprint $table) {
            $table->foreignId('film_id')->constrained('filmek');
            $table->foreignId('szinesz_id')->constrained('szinesz');
            $table->primary(['film_id', 'szinesz_id']);
        });

        Schema::create('sorozat_szinesz', function (Blueprint $table) {
            $table->foreignId('sorozat_id')->constrained('sorozatok');
            $table->foreignId('szinesz_id')->constrained('szinesz');
            $table->primary(['sorozat_id', 'szinesz_id']);
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
