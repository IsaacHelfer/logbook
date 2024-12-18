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
        Schema::create('aircraft', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('make_id')->unsigned()->index()->nullable();
            $table->foreign('make_id')->references('id')->on('aircraft_makes')->onUpdate('cascade');
            $table->bigInteger('model_id')->unsigned()->index()->nullable();
            $table->foreign('model_id')->references('id')->on('aircraft_models')->onUpdate('cascade');
            $table->string('identifier')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aircraft');
    }
};
