<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Basvurulars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('basvurus', function (Blueprint $table) {
          $table->id();
          $table->string('basvuru turu',"")->nullable();

          $table->string('ogrencino',"")->nullable();
          $table->string('dilekce',"")->nullable();
          $table->string('cap',"")->nullable();
          $table->string('yazokulu',"")->nullable();
          $table->string('intibak',"")->nullable();
          $table->string('yataygecis',"")->nullable();
          $table->string('dikeygecis',"")->nullable();
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
        Schema::dropIfExists('basvurular');
    }
}
