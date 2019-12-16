<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->integer('user_id');
            $table->enum('type', ['DS54', 'VK7']);
            $table->enum('status', ['pending', 'accepted', 'rejected', 'draft']);
            $table->json('kategori1_syarat1');
            $table->json('kategori1_syarat2');
            $table->json('kategori1_syarat3');
            $table->json('kategori1_syarat4');
            $table->json('kategori2_syarat1');
            $table->json('kategori2_syarat2');
            $table->json('kategori2_syarat3');
            $table->json('kategori2_syarat4');
            $table->json('kategori2_syarat5');
            $table->json('kategori3_syarat1');
            $table->json('kategori3_syarat2');
            $table->json('kategori4_syarat1');
            $table->json('kategori4_syarat2');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request');
    }
}
