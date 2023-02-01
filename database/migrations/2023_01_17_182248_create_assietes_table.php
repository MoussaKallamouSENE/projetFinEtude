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
        Schema::create('assietes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->index()->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('image');
            $table->text('detail')->nullable();
            $table->decimal('price');
            $table->integer('status');
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
        Schema::dropIfExists('assietes');
    }
};
