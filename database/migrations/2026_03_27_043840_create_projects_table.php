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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul proyek
            $table->text('description')->nullable(); // Deskripsi proyek
            $table->string('author_name'); // Nama mahasiswa/tim
            $table->string('thumbnail_path')->nullable(); // Gambar cover (2D)
            $table->string('model_3d_path')->nullable(); // File objek (3D - .glb/.gltf)
            $table->string('youtube_url')->nullable(); // Link video YouTube
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
