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
        Schema::table('comentario_post', function (Blueprint $table) {
            $table->foreign(['comentario'], 'fk_comentario_cp')->references(['id'])->on('comentarios')->onUpdate('restrict')->onDelete('restrict');
            $table->foreign(['post'], 'fk_post_cp')->references(['id'])->on('posts')->onUpdate('restrict')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comentario_post', function (Blueprint $table) {
            $table->dropForeign('fk_comentario_cp');
            $table->dropForeign('fk_post_cp');
        });
    }
};
