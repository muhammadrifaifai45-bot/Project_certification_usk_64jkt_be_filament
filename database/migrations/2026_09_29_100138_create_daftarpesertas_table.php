<?php

use App\Models\User;
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
        Schema::create('daftarpesertas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('certification_list_id')->nullable()->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nama_peserta');
            $table->string('nik')->nullable();
            $table->enum('gender',['perempuan','pria'])->nullable();
            $table->text('alamat')->nullable();
            $table->string('surat_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('daftarpesertas');
    }

    
};
