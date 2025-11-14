<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peches', function (Blueprint $table) {
            $table->id();
            $table->string('region');
            $table->string('espece');
            $table->integer('quantite');
            $table->foreignId('site_id')->nullable()->constrained('sites')->onDelete('set null');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peches');
    }
};
