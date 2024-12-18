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
        Schema::create('entries', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->bigInteger('aircraft_id')->unsigned()->index()->nullable();
            $table->foreign('aircraft_id')->references('id')->on('aircraft')->onUpdate('cascade');
            $table->bigInteger('category_id')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('flight_categories')->onUpdate('cascade');
            $table->decimal('category_time', 8, 2)->default(0);
            $table->bigInteger('type_id')->unsigned()->index()->nullable();
            $table->foreign('type_id')->references('id')->on('flight_types')->onUpdate('cascade');
            $table->decimal('type_time', 8, 2)->default(0);
            $table->decimal('day_time', 8, 2)->default(0);
            $table->decimal('night_time', 8, 2)->default(0);
            $table->decimal('xc_time', 8, 2)->default(0);
            $table->decimal('actual_instrument', 8, 2)->default(0);
            $table->decimal('sim_instrument', 8, 2)->default(0);
            $table->integer('num_instrument_app')->default(0);
            $table->integer('day_landings')->default(0);
            $table->integer('night_landings')->default(0);
            $table->decimal('total_duration', 8, 2)->default(0);
            $table->text('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entries');
    }
};
